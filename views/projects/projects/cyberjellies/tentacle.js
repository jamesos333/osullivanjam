/* Tentacle class: makes thicker tentacles for jellyfish
tenticle( color of tentacle, starting xPos, yPos, leg width, tenticle length)
tentCoor(xPos, yPos) new tenticle coordinate
drawTent() places tentacle at stored values
*/

class Tentacle {

  constructor(tmpClr, tmpX, tmpY, legW, legH) {
    //sets values
    this.tentX = tmpX;
    this.tentY = tmpY;
    this.widthOfLegs = legW;
    this.clr = tmpClr;
    this.legH = legH
    //sets up tentacle coordinates
    var tent = [legH];
    for (let i = 0; i < legH; i++) {
      tent[i] = sin(i/2) * this.widthOfLegs;
    }
    //makes into a this.
    this.tent = tent;
  }
  
  tentCoor(xPos, yPos) {
    this.tentX = xPos;
    this.tentY = yPos;
  }

  drawTent() {
    stroke(this.clr+"CC");
    strokeWeight(5);
    //draws tenticle from coordinates in the array
    for (let i = 1; i < this.legH; i++) {
      strokeWeight(2);
      let prevX = this.tent[i-1] +this.tentX;
      let prevY = (this.tentY) + ((i-1) *5);
      line(prevX, prevY, this.tent[i] +this.tentX, (this.tentY) + i *5);
    }
    //cycles coordinates through array
    let newBot = this.tent[0];
    for ( let i = 0; i < this.legH -1; i++ ) {
      this.tent[i] = this.tent[i+1];
    }
    this.tent[this.legH-1] = newBot;
  }
  
}