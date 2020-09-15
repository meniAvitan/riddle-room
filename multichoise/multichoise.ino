#define pinBtnRed     D5
#define pinBtnGreen   D4
#define pinBtnBlue    D3
#define pinBtnYellow  D2

#define MAX_ERRORS  5
#define NUMBER_OF_CHANNELS 4
int Btns[NUMBER_OF_CHANNELS]={pinBtnRed,pinBtnGreen,pinBtnBlue,pinBtnYellow};
bool BtnIsPressed[NUMBER_OF_CHANNELS]={false,false,false,false};

String ans;
byte errors;

void NewGame(){
  errors=MAX_ERRORS;
  NewQuestion();
}
void NewQuestion(){
  ans=getDataFromServer();
}
void setup() {
  for(byte k=0;k<NUMBER_OF_CHANNELS;k++){
    pinMode(Btns[k],INPUT_PULLUP);
  }

  Serial.begin(9600);
  Serial.println("started");
  wifiSetup();
  delay(3000);
  NewGame();
}
void loop() {
  while(ans=="-1"){
    delay(10000);
    NewGame();
  }
  for(byte channel=0;channel<NUMBER_OF_CHANNELS;channel++){
    if(digitalRead(Btns[channel])==LOW){
      if(! BtnIsPressed[channel]){
        BtnIsPressed[channel]=true;
        if(ans==String(channel+1)){
          GoodAns();
        }
        else {
          BadAns();
        }
      }
    } else {
      BtnIsPressed[channel]=false;
    }
  }
  delay(20);
}
void GoodAns(){
  Serial.println("GoodAns");
  MoveNextQ();
  delay(3000);
  NewQuestion();
}
void BadAns(){
  Serial.print("BadAns");
  Serial.print("errors=");
  Serial.println(errors);
  errors--;
  if(errors==0){
    FinishGame();
  }
}
