import mysql.connector
import time
from datetime import date

import serial
import os

mydb = mysql.connector.connect(
    host="83.85.113.219",
    user="ipmedt5project",
    passwd="m1K4F1tJYRmPnBvK",
    database="ipmedt5project"
)

port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)

print("MFRC522 is aan het runnen...")

mycursor = mydb.cursor()

while True:
    rcv = port.readline().strip()

    if (rcv == "CC188822"):
        mycursor.execute("SELECT enabled FROM sensors WHERE huis_id = '1' AND id = '1';")
        for x in mycursor:
            enabled = x[0]
            if enabled == "true":
                mycursor.execute("UPDATE sensors SET enabled = 'false' WHERE huis_id = '1';")
                mydb.commit()
                print("Alle sensoren staan aan. Het probleem is verholpen.")
            elif enabled == "false":
                mycursor.execute("UPDATE sensors SET enabled = 'true' WHERE huis_id = '1';")
                mydb.commit()
                print("Sensoren staan uit. Het huis heeft een probleem!")