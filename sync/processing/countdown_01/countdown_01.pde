/* this is a countdown for pcoketvj to 
count down and then trigger an action 
missing is conversion to minutes and hours
input is made in seconds
*/

int giventime = 360;
int timer = giventime; //set seconds to count down
int bgcolor = 0;
void setup(){

  
  //make it fullscreen later on with fullScreen(); 
  
  size (800,800);
  frameRate (60);
}

void draw(){
  
  background(bgcolor);
  textAlign(CENTER, CENTER);
  textSize(100);
  text(timer, width/2, height/2);
  //text(frameCount, width/2, height/2);
  //text (countDown, 50,50);
 
  
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

 //resets to start when mouse is clicked:
 
void mouseClicked(){
//when moue is clicked, countdown will start again
//add gpio pins for buttons or mouse
//background(125);

timer=giventime;
setup();

}


  
