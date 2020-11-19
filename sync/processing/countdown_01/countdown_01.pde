/* this is a countdown for pcoketvj to 
count down and then trigger an action */

int giventime = 600; //set seconds to count down
int timer = giventime; //just a workaround to get reset on click working
int bgcolor = 0; //for a faster color change


void setup(){
  //make it fullscreen later on with
  //fullScreen(); //fullscreen
  size(800,800); //small view
  frameRate (60);
}

void draw(){
  
  background(bgcolor);
  textAlign(CENTER, CENTER);
  textSize((width/5));
  

/////////////////////////////
///here we make sure its always displayed in 00:00:00 format
//here we add 0 ifront of seconds
  String finalseconds = nf((timer %60),2);
 //here we add 0 to minutes
  String finalminutes = nf(((timer/60)%60),2);
  //add 0 to hours
  String finalhours = nf(((timer/360)%60),2);
  /////////////////////////////
  //here we display counter:
  text(finalhours+":"+finalminutes+":"+finalseconds, (width/2), height/2);
  //////////////////////////////
 // here is the main counter programm:
  if(frameCount%60==0 && timer>0){//if frameCount is divided by 60 = 1 second
   //and also stop timer when we reach 0
   timer=timer-1;
    }
    
  if (timer == 0){
    delay(1);
    background(bgcolor);
    text("lets beginn",width/2, height/2 );
    //this will trigger a script
    //launch("/here I need to enter the sys command");
    
  }


}

///////////////////////////////////
 //resets to start when mouse is clicked:
 
void mouseClicked(){
//when moue is clicked, countdown will start again
//add gpio pins for buttons or mouse
//background(125);

timer=giventime;
setup();

}
