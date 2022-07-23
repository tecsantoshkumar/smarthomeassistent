#include <SoftwareSerial.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WiFiMulti.h>
#include <DHT.h>

#define DHTPIN D0
#define DHTTYPE  DHT11     // DHT 11  
int RELAY9 = D1;
int RELAY10 = D2;
int RELAY11 = D3;
int RELAY12 = D4;
int RELAY13 = D5;
int RELAY14 = D6;
int RELAY15 = D7;
int RELAY16 = D8;
uint32_t delayMS;

const char* host = "tsksmarthomeautomation.000webhostapp.com";  //Add the host without "www" Example: electronoobs.com
String location_url="";
HTTPClient http;                                     


void setup()
{
  pinMode(RELAY9, OUTPUT);
  pinMode(RELAY10, OUTPUT);
  pinMode(RELAY11, OUTPUT);
  pinMode(RELAY12, OUTPUT);
  pinMode(RELAY13, OUTPUT);
  pinMode(RELAY14, OUTPUT);
  pinMode(RELAY15, OUTPUT);
  pinMode(RELAY16, OUTPUT);
//  dht.begin();
  
  Serial.begin(115200);
  
  WiFi.begin("wifi","0123456789");
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
    Serial.println(data.substring(11,1));
    Serial.println(data.substring(12,1));
    Serial.println(data.substring(13,1));
    Serial.println(data.substring(14,1));
    Serial.println(data.substring(15,1));
    digitalWrite(RELAY9,LOW);
    digitalWrite(RELAY10,LOW);
    digitalWrite(RELAY11,LOW);
    digitalWrite(RELAY12,LOW);
    digitalWrite(RELAY13,LOW);
    digitalWrite(RELAY14,LOW);
    digitalWrite(RELAY15,LOW);
    digitalWrite(RELAY16,LOW);
    if(data.substring(0,1)=="1")
    {
      digitalWrite(RELAY9,HIGH);
    }
    if(data.substring(1,1)=="1")
    {
      digitalWrite(RELAY10,HIGH);
    }
    if(data.substring(2,1)=="1")
    {
      digitalWrite(RELAY11,HIGH);
    }
    if(data.substring(11,1)=="1")
    {
      digitalWrite(RELAY12,HIGH);
    }
    if(data.substring(12,1)=="1")
    {
      digitalWrite(RELAY13,HIGH);
    }
    if(data.substring(13,1)=="1")
    {
      digitalWrite(RELAY14,HIGH);
    }
    if(data.substring(14,1)=="1")
    {
      digitalWrite(RELAY15,HIGH);
    }
    if(data.substring(15,1)=="1")
    {
      digitalWrite(RELAY16,HIGH);
    }
       
    http.end();
    
  delay(10);
}
