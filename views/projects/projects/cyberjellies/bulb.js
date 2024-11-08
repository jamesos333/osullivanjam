/* Bulb class: draws jellyfish bulb on for its head
functions (tentacles and stingers) rely on the position of the bulb
Bulb( bulb color, starting xPos, starting yPos )
bulbCoor( xPos, yPos ) moves bulb to these coordinates
adjustBulb() changes value for opening at the bottom
drawBulb() draws entire bulb at stored coordinates
bulbDir() returns if bulb is going up or down
*/

class Bulb {
  constructor(tmpClr, tmpBSpeed, tmpX, tmpY) {
    //sets up values
    this.changeBulb = 1;
    this.clr = tmpClr;
    this.bulbSpeed = tmpBSpeed;
    this.jellyX = tmpX;
    this.jellyY = tmpY;
  }

  bulbCoor(xPos, yPos) {
    this.jellyX = xPos;
    this.jellyY = yPos;
  }

  adjustBulb() {
    //adjusts bulb size (arc size) radians
    this.jellyStart = radians(160 + this.changeBulb);
    this.jellyStop = radians(380 - this.changeBulb);
    //checks if bulb should be reversed
    if (this.changeBulb >= 20) {
      this.bulbSpeed *= -1;
    }
    if (this.changeBulb <= -10) {
      this.bulbSpeed *= -1;
    }
    //has jellyfish go faster when pushing down
    if (this.bulbSpeed < 0) {
      this.changeBulb += this.bulbSpeed * 1.5;
    } else {
      this.changeBulb += this.bulbSpeed;
    }
  }

  drawBulb() {
    fill(this.clr);
    stroke(255, 255, 255, 100);
    strokeWeight(2);
    //draws bottom of bulb
    this.botWid = 100 + this.changeBulb;
    constrain(this.botWid, 60, 100);
    ellipse(this.jellyX, this.jellyY + 15 - this.changeBulb / 2, this.botWid, 35);
    //sets top bulb color and stroke weight
    noStroke();
    //draws bulb
    arc(this.jellyX, this.jellyY, 100, 100, this.jellyStart, this.jellyStop, CHORD);
    //draws circles on top of bulb
    fill(255, 255, 255, 100);
    ellipse(this.jellyX - 25, this.jellyY - 30, 20, 10);
    ellipse(this.jellyX + 25, this.jellyY - 30, 20, 10);
    ellipse(this.jellyX - 15, this.jellyY - 43, 10, 5);
    ellipse(this.jellyX + 15, this.jellyY - 43, 10, 5);
  }

  bulbDir() {
    //true is up and false is down
    if (this.bulbSpeed < 0) {
      return false;
    }
    return true;
  }

}