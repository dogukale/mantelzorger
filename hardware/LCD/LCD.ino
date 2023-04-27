#include <LiquidCrystal_I2C.h>
#include <ESP8266WiFi.h>

LiquidCrystal_I2C lcd(0x3F, 16, 2);
const char* ssid = "KeuperIOT"; //replace with your own wifi ssid
const char* password = "exPnPJ8gAPhF3Esh"; //replace with your own //wifi ssid password
const char* host = "192.168.2.14";

void setup() {
  // The begin call takes the width and height. This
  // Should match the number provided to the constructor.
  lcd.begin(16,2);
  lcd.init();
  
  // Turn on the backlight.
  lcd.backlight();

  // Move the cursor characters to the right and
  // zero characters down (line 1).
  lcd.setCursor(2, 0);
  lcd.print("Connecting:");
  lcd.setCursor(1, 1);
  
  Serial.begin(115200);
  delay(10); // We start by connecting to a WiFi network
  Serial.println();
  Serial.println(); Serial.print("Connecting to ");
  Serial.println(ssid);
  /* Explicitly set the ESP8266 to be a WiFi-client, otherwise, it by default, would try to act as both a client and an access-point and could cause network-issues with your other WiFi-devices on your WiFi-network. */
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  
  int i = 0;
  while (WiFi.status() != WL_CONNECTED) { // Wait for the Wi-Fi to connect
    delay(1000);
    if (i > 20){
      lcd.setCursor(0,1);
      lcd.print(" no connection! ");
    } else {
      lcd.setCursor(i, 1);
      ++i;
      lcd.print(".");
    }
  }
  lcd.setCursor(2, 0);
  lcd.print("IP Address:");
  lcd.setCursor(0,1);
  lcd.print(WiFi.localIP());


  //Clear LCD Screen
  delay(2000);
  lcd.clear();
  lcd.setCursor(0,1);
  lcd.print("Geen Alarmen");
  lcd.setCursor(0,0);
  lcd.print("Locatie:        ");


}
void loop() {
  delay(1000);
  WiFiClient client;
  const int httpPort = 8000;
  
  int i = 0;
  while (WiFi.status() != WL_CONNECTED) { // Wait for the Wi-Fi to connect
    delay(1000);
    if (i > 20){
      lcd.setCursor(0,1);
      lcd.print(" no connection! ");
    } else {
      lcd.setCursor(i, 1);
      ++i;
      lcd.print(".");
    }
  }
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }
  // We now create a URI for the request
  //this url contains the informtation we want to send to the server
  //if esp8266 only requests the website, the url is empty
  String url = "/alarmen";
  /* url += "?param1=";
    url += param1;
    url += "?param2=";
    url += param2;
  */
  Serial.print("Requesting URL: ");
  Serial.println(url); // This will send the request to the server
  client.print(String("GET ") + url + " HTTP/1.1\r\n" + "Host: " + host + "\r\n" + "Connection: close\r\n\r\n");
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 2000)
    { Serial.println(">>> Client Timeout !");
      client.stop(); return;
    }
  } // Read all the lines of the reply from server and print them to Serial
  while (client.available())
  { 
    String ch = client.readStringUntil('\r');
    ch.trim();
    if (ch.endsWith("Huis")){
      if (ch.startsWith("Geen")){
        Serial.println("Geen Alarmen");
        lcd.setCursor(0,1);
        lcd.print("Geen Alarmen   ");
      } else {
        Serial.println(ch);
        lcd.setCursor(0,1);
        lcd.print(ch);
        lcd.print("     ");
      }
    }
  }
  Serial.println();
  Serial.println("closing connection");
}
