#include <Arduino.h>

// put function declarations here:
int myFunction(int, int);

int ledRojo = 15; //porque la resistencia esta conectada al pin 15 en el procesador
int ledVerde = 14;

void setup() {
  pinMode(ledRojo,OUTPUT);
  pinMode(ledVerde,OUTPUT);
  digitalWrite(ledVerde,HIGH);
}

void loop() {
  digitalWrite(ledRojo,HIGH);
  digitalWrite(ledVerde,HIGH);
  delay(125);
  digitalWrite(ledVerde,LOW);
  delay(300);
  digitalWrite(ledVerde,HIGH);
  delay(125);
  digitalWrite(ledVerde,LOW);
  delay(300);
  digitalWrite(ledRojo,LOW);
  delay(150);
}

// put function definitions here:
int myFunction(int x, int y) {
  return x + y;
}