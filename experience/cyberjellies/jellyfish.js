/* Jellyfish: makes a jellyfish (dependent on 'Bulb' 'Stinger' 'Tenticle' classes
 Jellyfish( starting xPos, yPos, amount of tentacles, min length, max length, amount of stingers, min length, max length) 
 mainJellyAuto() makes all jellyfish parts and has it swim automatically
 mainJellyMan() makes all jellyfish parts and has it go to specified x and y pos
 moveJelly() moves jellyfish up or down and left or right depending
 makeBulb() feeds bulb new xPos yPos and draws down bulb
 makeStingers() feeds stingers array xPos and yPos and draws down stingers
 makeTent() feeds tentacles array xPos and yPos values and draws down tentacles
 */

class Jellyfish {

  constructor(xPos, yPos, tmpClr, tentAmt, tentMin, tentMax, stngrAmt, stngrMin, stngrMax) {
    //sets jelly speed
    this.jellyXspeed = 1;
    //sets color
    this.clr = tmpClr;
    //sets starting x and y pos
    this.jellyfishX = xPos;
    this.jellyfishY = yPos;
    //gets both tentacle and stinger class arrays ready
    var stingers = [];
    var leg = [];
    //sets up bulb
    var head = new Bulb(this.clr, 0.5, this.jellyfishX, this.jellyfishY);
    //adds values to stingers
    for (let i = 0; i < stngrAmt; i++) {
      this.stingLength = random(stngrMin, stngrMax);
      stingers.push(new Stinger(this.clr, this.stingLength, this.jellyfishX, this.jellyfishY));
    }
    //adds values to tentacles
    for (let i = 0; i < tentAmt; i++) {
      this.xTent = 180 + (i * 10);
      this.tentLength = int(random(tentMin, tentMax));
      leg.push(new Tentacle(this.clr, this.xTent, 210, 4, this.tentLength));
    }
    //makes them into this. based arrays
    this.head = head;
    this.leg = leg;
    this.stingers = stingers;
  }

  mainJellyAuto(speed) {
    this.makeStingers();
    this.makeTent();
    this.makeBulb();
    this.moveJelly(speed);
  }

  mainJelly() {
    this.makeStingers();
    this.makeTent();
    this.makeBulb();
  }

  manualCoor(tmpX, tmpY) {
    this.jellyfishX = tmpX;
    this.jellyfishY = tmpY;
  }

  jellyX() {
    return this.jellyfishX;
  }

  jellyY() {
    return this.jellyfishY;
  }

  moveJelly(speed) {
    //moves faster up than down
    if (this.head.bulbDir() == true) {
      this.jellyfishY += speed;
    } else
      this.jellyfishY -= speed * 1.5;
    //moves other way if it hits wall
    if (this.jellyfishX >= width || this.jellyfishX <= 0) {
      this.jellyXspeed *= -1;
    }
    //changes x coordinate
    this.jellyfishX += this.jellyXspeed;
  }

  makeBulb() {
    //change position to correct X and Y
    this.head.bulbCoor(this.jellyfishX, this.jellyfishY);
    //creates bulb
    this.head.adjustBulb();
    this.head.drawBulb();
  }

  makeStingers() {
    //places all stingers
    for (let i = 0; i < this.stingers.length; i++) {
      //finds newX
      let newX = (i * 5) + (this.jellyfishX - ((this.stingers.length - 1) * 5) / 2);
      this.stingers[i].moveStinger(newX, this.jellyfishY);
    }
    //draws stingers
    for (let i = 0; i < this.stingers.length; i++) {
      this.stingers[i].makeStinger();
    }
  }

  makeTent() {
    //places all tentacles
    for (let i = 0; i < this.leg.length; i++) {
      //finds location of tentacles
      let newX = (i * 10) + (this.jellyfishX - ((this.leg.length - 1) * 10) / 2);
      this.leg[i].tentCoor(newX, this.jellyfishY);
    }
    //draws tentacles
    for (let i = 0; i < this.leg.length; i++) {
      this.leg[i].drawTent();
    }
  }
}