/*countdown, t- from data.txt file,
when finished trigger a trigger.sh (make sure to declare exact path when compiling)
and destroy itself
2020*/

///load time from a file, decalred as data ( you don't need an array, as there is just one value to pick )
int timer;

/// declare the String Array to store the data from the txt file
String[] txtFile;

int bgcolor = 0; //for a faster color change

void setup(){

//fullScreen(); //fullscreen does not work on rpi due to framedrops
size(300,300); //small view
frameRate (30); //RPi can't handle more than approx. 35fps

//sets the time from the file
txtFile = loadStrings("data.txt");

// here you basically need to assign the first and only item of the string array "txtFile" to the int "timer"
// you need to write int( string ) to convert a string into an integer
timer = int(txtFile[0]);

//this just print the value, but does not set it
//println( timer );

}

void draw(){

background(bgcolor);
textAlign(CENTER, CENTER);
textSize((width/5));

/////////////////////////////
///here we make sure its always displayed in 00:00:00 format
//add 0 ifront of seconds
String finalseconds = nf((timer%60),2);
//add 0 to minutes
String finalminutes = nf(((timer/60)%60),2);
//add 0 to hours
String finalhours = nf(((timer/360)%60),2);
/////////////////////////////
//display counter:
text(finalhours+":"+finalminutes+":"+finalseconds, (width/2), height/2);
//////////////////////////////
// the main counter programm:
//new with millis

if(((millis()*3/100))%30==0 && timer>0){//if frameCount is divided by 30 = 1 second
timer=timer-1;
}
//and also stop timer when we reach 0
if (timer == 0){
delay(1);
background(bgcolor);
textSize((width/10));
text("lets beginn",width/2, height/2 );

//trigger script:
//exec("/var/www/sync/processing/countdown_01/trigger.sh");
exec("/var/www/sync/processing/countdown_01/application.linux-armv6hf/trigger.sh");
//wait a moment to display endscreen
delay(1);
//kill processing if not already done with stopall from triggered script
exit();

}

//for debugging only
//println("ms:"+((millis()*3/100))+" fps: "+(frameCount));

}

///////////////////////////////////
//resets to start when mouse is clicked:

void mouseClicked(){
//when moue is clicked, countdown will start again
//add gpio pins for buttons or mouse and xdotool for CP
//background(125);

timer=int(txtFile[0]);
setup();

}
