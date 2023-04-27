#include <SPI.h>
#include <MFRC522.h>

#define RST_PIN         9       // Configurable, see typical pin layout above
#define SS_PIN          10      // Configurable, see typical pin layout above
#define LED_GREEN       6       // Configurable, see typical pin layout above
#define LED_RED         3       // Configurable, see typical pin layout above
#define BUZZER          4       // Configurable, see typical pin layout above

MFRC522 mfrc522(SS_PIN, RST_PIN);  // Create MFRC522 instance

void setup() {
  Serial.begin(9600);     // Initialize serial communications with the PC
  SPI.begin();      // Init SPI bus
  mfrc522.PCD_Init();     // Init MFRC522
  delay(4);     // Optional delay. Some board do need more time after init to be ready, see Readme
  
  pinMode(LED_GREEN, OUTPUT);
  pinMode(LED_RED, OUTPUT);
  pinMode(BUZZER, OUTPUT);
}

void loop() {
  // Reset the loop if no new card present on the sensor/reader. This saves the entire process when idle.
  if ( ! mfrc522.PICC_IsNewCardPresent()) {
    return;
  }

  // Select one of the cards
  if ( ! mfrc522.PICC_ReadCardSerial()) {
    return;
  }

  // Show UID on Serial Monitor
  String content;
  byte letter;
  for (byte i = 0; i < mfrc522.uid.size; i++) {
    Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? "0" : "");
    Serial.print(mfrc522.uid.uidByte[i], HEX);
    content.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? "0" : ""));
    content.concat(String(mfrc522.uid.uidByte[i], HEX));
  }
  
  content.toUpperCase();
  if (content == "CC188822") {
    Serial.println();
    digitalWrite(LED_GREEN, HIGH);
    tone(BUZZER, 500);
    delay(300);
    noTone(BUZZER);
    digitalWrite(LED_GREEN, LOW);
  }

  else {
    digitalWrite(LED_RED, HIGH);
    Serial.println();
    tone(BUZZER, 300);
    delay(1000);
    noTone(BUZZER);
    digitalWrite(LED_RED, LOW);
  }
}
