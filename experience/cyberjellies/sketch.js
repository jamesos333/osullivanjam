//amount of jellyfish
var amountOfJellies = 1;
//dont change these
var canFish = true;
var fishX;
var fishY;
var jellyX = [];
var jellyY = [];
var xDist = [];
var yDist = [];
var jellyC = [];
var jellie = [];
var speed = [];

function setup() {
  createCanvas(windowWidth, windowHeight);
  //gets amount of jellies from url by putting ?jelly=1 at end of URL
  var params = getURLParams();
  if (params.jelly > 0) {
    amountOfJellies = params.jelly;
  }
  //makes array of nice colors
  jellyC = ["#12BEFF", "#0000FF", "#FF3333", "#CC0000", "#12FF1B", "#004d03", "#b578d3", "#800080", "#ffcc00", "#7D8C0D", "#FB9DC9", "#F51B81", "#993333", "#527a7a"];
  //sets up the jellies
  for (let i = 0; i < amountOfJellies; i++) {
    //makes them a random width and height
    let jelH = random(20, height - 300);
    let jelW = random(0, width);
    //finds them a random color
    let whichColor = int(random(0, jellyC.length));
    let jellyColor = jellyC[whichColor];
    //gives them a random speed
    speed[i] = int(random(1, 6));
    //sets up jellyfish with created values
    jellie[i] = new Jellyfish(jelW, jelH, jellyColor, 6, 20, 40, 12, 240, 360);
  }
}

function mousePressed() {
  if (canFish == true) {
    canFish = false;
    fishX = mouseX;
    fishY = mouseY;
    for (let i = 0; i < jellie.length; i++) {
      //finds current x and y pos
      jellyX[i] = jellie[i].jellyX();
      jellyY[i] = jellie[i].jellyY();
      //makes random speed
      let fishSpeed = int(random(20, 60));
      //gets distance between fish and jelly
      xDist[i] = (fishX - jellyX[i]) / fishSpeed;
      yDist[i] = ((fishY - 100) - jellyY[i]) / fishSpeed;
    }
  }
}

function draw() {
  background(0);
  //draws all jellyfish if on auto
  if (canFish == true) {
    for (let i = 0; i < jellie.length; i++) {
      jellie[i].mainJellyAuto(speed[i]);
    }
  }
  //draws all jellyfish without auto movement if on fish mode
  if (canFish == false) {
    for (let i = 0; i < jellie.length; i++) {
      jellie[i].mainJelly();
    }
  }
  //checks for fish
  findFish();
}

function findFish() {
  if (canFish == false) {
    fill("#FF8408");
    //makes fish sprite
    ellipse(fishX, fishY, 20, 10);
    triangle(fishX + 8, fishY, fishX + 16, fishY - 6, fishX + 16, fishY + 6);
    //cycles through all jellies to have them go to fish
    for (let i = 0; i < jellie.length; i++) {
      //checks if it needs to move jelly X
      if (jellyX[i] != fishX) {
        jellyX[i] += xDist[i];
      }
      //checks if it needs to move jelly Y
      if (jellyY[i] != fishY) {
        jellyY[i] += yDist[i];
      }
      //updates coordinates
      jellie[i].manualCoor(jellyX[i], jellyY[i]);
    }
    for (let i = 0; i < jellie.length; i++) {
      //checks if any jelly is there yet and if so they will resume normal behavior
      //uses collide2d to check for jellyfish - fish collision
      hit = collideRectCircle(jellyX[i] - 20, jellyY[i] + 100, 60, 200, fishX, fishY, 20);
      if (hit == true) {
        canFish = true;
      }
    }
  }
}