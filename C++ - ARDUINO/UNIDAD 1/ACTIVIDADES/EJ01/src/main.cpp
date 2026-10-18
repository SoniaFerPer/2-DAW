#include <Arduino.h>

// put function declarations here:
int myFunction(int, int);

int led = 15; //porque la resistencia esta conectada al pin 15 en el procesador

void setup() {
  pinMode(led,OUTPUT);
}

void loop() {
  digitalWrite(led,HIGH);
  delay(1000);
  digitalWrite(led,LOW);
  delay(500);
}

// put function definitions here:
int myFunction(int x, int y) {
  return x + y;
}