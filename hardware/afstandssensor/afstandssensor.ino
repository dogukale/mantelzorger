int TRIG_PIN = 13;
int ECHO_PIN = 12;

void setup() {
  pinMode(TRIG_PIN, OUTPUT);
  pinMode(ECHO_PIN, INPUT);
  Serial.begin(9600);
}

void loop() {
  digitalWrite(TRIG_PIN, LOW);
  delayMicroseconds(2);
  digitalWrite(TRIG_PIN, HIGH);
  delayMicroseconds(10);
  digitalWrite(TRIG_PIN, LOW);
  
  const unsigned long duration= pulseIn(ECHO_PIN, HIGH);
  int distance= duration/29/2;

  // print een 'a' als er een object binnen 50cm van de sensor komt
  if(distance <= 50){
    Serial.println("a");
  } 
  // print de afstand zodat de serial niet op een 'a' vast komt te staat
  if(distance >= 50){
    Serial.print("Afstand: ");
    Serial.println(distance);
  }
  // korte delay zodat de srial niet vol gespamt wordt
  delay(100);
}
