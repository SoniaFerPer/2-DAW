#include <Arduino.h>

// put function declarations here:
int myFunction(int, int);

int ledRojo = 15; //porque la resistencia esta conectada al pin 15 en el procesador
int ledVerde = 14;
int ledAmbar = 11;

void setup() {
  pinMode(ledRojo,OUTPUT);
  pinMode(ledVerde,OUTPUT);
  pinMode(ledAmbar,OUTPUT);
}

void loop() {
  digitalWrite(ledRojo,HIGH);
  delay(5000);
  digitalWrite(ledRojo,LOW);
  delay(500);
  digitalWrite(ledVerde,HIGH);
  delay(9000);
  digitalWrite(ledVerde,LOW);
  delay(500);
  digitalWrite(ledVerde,HIGH);
  digitalWrite(ledAmbar,HIGH);
  delay(1000);
  digitalWrite(ledVerde,LOW);
  digitalWrite(ledAmbar,LOW);
  delay(500);

}

// put function definitions here:
int myFunction(int x, int y) {
  return x + y;
}