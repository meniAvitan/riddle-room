#define dataPin   D5
#define clockPin  D7
#define latchPin  D8

#define Wbtn D0
#define Gled D1
#define Rled D2

#define potzPin   A0  

#define MAX_LEDS  10

int val;
int WbtnVal;
int lastBtnVal;
String userAns = "";
int count = 0;
String trueAns = "0246813579";

void setup() {
  pinMode(dataPin,OUTPUT);
  pinMode(clockPin,OUTPUT);
  pinMode(latchPin,OUTPUT);

  pinMode(Wbtn, INPUT_PULLUP);
  pinMode(Gled, OUTPUT);
  pinMode(Rled, OUTPUT);

  Serial.begin(9600);
    
  clear595();
}
byte lastInVal=0;
void loop() {
  
    byte inVal=map(analogRead(potzPin),0,1023,1,MAX_LEDS);
    if(inVal != lastInVal){
      clear595();
      showNum595(inVal);
    }
    lastInVal=inVal;

   if(onePress()){
   val = inVal;//map(analogRead(potzPin),0,1023,0,MAX_LEDS);
   Serial.println(val);
   count ++;
   userAns += val-1;

   if(count == 10){
    count = 0;
    if(userAns == trueAns){
      Serial.println("Good Ans");
    }
     printArr();
    }
                 }
  delay(100);
}
void showNum595(byte num){
  if(num > MAX_LEDS){
    num=MAX_LEDS;
  }
  unLatch595();
  for(byte k=0;k<MAX_LEDS-num;k++){
    enterBit595(0);
  }
    enterBit595(1);
  for(byte k=0;k<num-1;k++){
    enterBit595(0);
  }
  show595();
}
void clear595(){
  unLatch595();
  for(int k=0;k<MAX_LEDS;k++){
    enterBit595(0);
  }
  show595();
}
void enterBit595(byte val){
  if(val==1){
    digitalWrite(dataPin,HIGH);
  } else {
    digitalWrite(dataPin,LOW);
  }
    digitalWrite(clockPin, LOW);
    delayMicroseconds(100);
    digitalWrite(clockPin, HIGH);
    delayMicroseconds(100);
}
void show595(){
    digitalWrite(latchPin, HIGH);
}
void unLatch595(){
    digitalWrite(latchPin, LOW);
}

bool onePress(){
  bool ret = false;
  WbtnVal = digitalRead(Wbtn);
  if((WbtnVal == LOW) && (lastBtnVal == HIGH)){
    ret = true;
  }
  lastBtnVal = WbtnVal;
  return ret;
}

void printArr(){
    Serial.print (userAns);
    Serial.println (" ");
}
