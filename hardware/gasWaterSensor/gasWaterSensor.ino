const int waterSens = A0; 
const int led = 9; 
const int gasSens = A1;
int sensorVal;

#include <Wire.h>
#include <AM2320.h>
#include <TM1637Display.h>
AM2320 th;

#define CLK 10
#define DIO 11

const uint8_t HOOG[] = {
  SEG_F | SEG_B | SEG_G | SEG_E | SEG_C,           
  SEG_A | SEG_B | SEG_F | SEG_C | SEG_D | SEG_E,   
  SEG_A | SEG_B | SEG_F | SEG_C | SEG_D | SEG_E,         
  SEG_A | SEG_F | SEG_B | SEG_G | SEG_C | SEG_D          
  }; //Tekst op display HOOG

const uint8_t GOED[] = {
  SEG_A | SEG_F | SEG_B | SEG_G | SEG_C | SEG_D,          
  SEG_A | SEG_B | SEG_F | SEG_C | SEG_D | SEG_E,   
  SEG_A | SEG_D | SEG_E | SEG_F | SEG_G,                          
  SEG_D | SEG_E | SEG_C | SEG_G | SEG_B         
  }; //Tekst op display GOED
 

TM1637Display display(CLK, DIO);

void setup() {
 Serial.begin(9600);//begint serial monitor
 pinMode(led, OUTPUT);
}

void loop() {
  int sensorVal = analogRead(waterSens); 
  int gasVal = analogRead(gasSens); 
  display.setBrightness(0x0f);
  Serial.print("W=");
  if (sensorVal > 0) {
    Serial.println("1");
    display.setSegments(HOOG);
    delay(3000);
    } else {
      Serial.println("0");
      display.setSegments(GOED);
      }
  // Leest de waterssensor en als deze water detect geeft deze HOOG op display

  switch(th.Read()) {
    case 2:
      Serial.println("CRC failed");
      break;
    case 1:
      Serial.println("Sensor offline");
      break;
    case 0:
      Serial.print("V=");
      Serial.println(th.h); 
      Serial.print("T=");
      Serial.println(th.t);
      break;
  } // Leest temperatuur van de kamer
  
  Serial.print("G=");
  if (gasVal > 500) {
    Serial.println("1");
    display.setSegments(HOOG);
    delay(3000);
    } else {
      Serial.println("0");
      display.setSegments(GOED);
      }
  // Leest de gassensor en als deze gas detect over een bepaald level geeft deze HOOG op display

  delay(2400);
}
