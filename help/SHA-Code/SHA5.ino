#include <SoftwareSerial.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WiFiMulti.h>
#include <Adafruit_Sensor.h>
#include <DHT.h>
#include <DHT_U.h>

#define DHTPIN D0
#define DHTTYPE  DHT11     // DHT 11  
int RELAY1 = D1;
int RELAY2 = D2;
int RELAY3 = D3;
int RELAY4 = D4;
int RELAY5 = D5;
int RELAY6 = D6;
int RELAY7 = D7;
int RELAY8 = D8;
DHT_Unified dht(DHTPIN, DHTTYPE);
uint32_t delayMS;

const char* host = "tsksmarthomeautomation.000webhostapp.com";  //Add the host without "www" Example: electronoobs.com
String location_url="";
HTTPClient http;                                     


void setup()
{
  pinMode(RELAY1, OUTPUT);
  pinMode(RELAY2, OUTPUT);
  pinMode(RELAY3, OUTPUT);
  pinMode(RELAY4, OUTPUT);
  pinMode(RELAY5, OUTPUT);
  pinMode(RELAY6, OUTPUT);
  pinMode(RELAY7, OUTPUT);
  pinMode(RELAY8, OUTPUT);
  dht.begin();
  
  Serial.begin(115200);
  WiFi.begin("smarthomeautomation","0123456789");
  while(WiFi.status()!=WL_CONNECTED)
  {
    Serial.println(".");
    delay(200);
  }
  Serial.println("Connected");
  Serial.println(WiFi.localIP()); 
}


void loop()
{  
    //WiFiClient client;
    Serial.print("[HTTP] begin...\n");
    http.begin(host,80,"/testiot.php?a="+ String(millis()));
    int httpCode = http.GET();
    String data = http.getString();
    Serial.println(httpCode);
    Serial.println(data.substring(0,1));
    Serial.println(data.substring(1,1));
    Serial.println(data.substring(2,1));
    Serial.println(data.substring(3,1));
    Serial.println(data.substring(4,1));
    Serial.println(data.substring(5,1));
    Serial.println(data.substring(6,1));
    Serial.println(data.substring(7,1));
    digitalWrite(RELAY1,LOW);
    digitalWrite(RELAY2,LOW);
    digitalWrite(RELAY3,LOW);
    digitalWrite(RELAY4,LOW);
    digitalWrite(RELAY5,LOW);
    digitalWrite(RELAY6,LOW);
    digitalWrite(RELAY7,LOW);
    digitalWrite(RELAY8,LOW);
    if(data.substring(0,1)=="1")
    {
      digitalWrite(RELAY1,HIGH);
    }
    if(data.substring(1,1)=="1")
    {
      digitalWrite(RELAY2,HIGH);
    }
    if(data.substring(2,1)=="1")
    {
      digitalWrite(RELAY3,HIGH);
    }
    if(data.substring(3,1)=="1")
    {
      digitalWrite(RELAY4,HIGH);
    }
    if(data.substring(4,1)=="1")
    {
      digitalWrite(RELAY5,HIGH);
    }
    if(data.substring(5,1)=="1")
    {
      digitalWrite(RELAY6,HIGH);
    }
    if(data.substring(6,1)=="1")
    {
      digitalWrite(RELAY7,HIGH);
    }
    if(data.substring(7,1)=="1")
    {
      digitalWrite(RELAY8,HIGH);
    }
       
    http.end();
    
  

  delay(10000);
}
