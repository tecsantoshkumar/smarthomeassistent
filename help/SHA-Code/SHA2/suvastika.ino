#include <SoftwareSerial.h>
#include <ArduinoJson.h>
#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WiFiMulti.h>

uint32_t delayMS;

int TRIG_PIN = D4;
int ECHO_PIN = D5;

const char* host = "tsksmarthomeautomation.000webhostapp.com";  //Add the host without "www" Example: electronoobs.com
String location_url="";
HTTPClient http;

void setup(){
  
  WiFi.begin("wifi","0123456789");
  Serial.begin(9600);
  NodeMCU.begin(115200);
  while(WiFi.status()!=WL_CONNECTED)
  {
    Serial.print(".");
    delay(200);
  }
  Serial.print("IP Address: ");
  Serial.println(WiFi.localIP());
  Serial.println("Server Connected");

}
String msg1="",msg2="";
void loop(){
  
  //WiFiClient client;
  
    Serial.print("[HTTP] begin...\n");
     if (NodeMCU.available()>0){
    msg2 = NodeMCU.readStringUntil('\r');
    if(NodeMCU.read()== '\n'){
    Serial.println(msg2);
    msg1=msg2;
    }
  }
    http.begin(host,80,"/testiot.php?a="+ String(millis())+"&hval="+String(msg1));
    int httpCode = http.GET();
    String data = http.getString();
    Serial.println(httpCode);
   http.end();
   delay(1000);
}
