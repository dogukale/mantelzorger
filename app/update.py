
import mysql.connector

mydb = mysql.connector.connect(
    host="127.0.0.1",
    user="laravel",
    passwd="laravel",
    database="mantelzorg"
)

mycursor = mydb.cursor()

mycursor.execute("UPDATE beveiliging SET triggered = true;")
print("alarm")
mydb.commit()