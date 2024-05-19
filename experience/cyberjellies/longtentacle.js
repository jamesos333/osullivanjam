/* Stinger class: makes stingers for jellyfish which are thinner tentacles for stinging
Stinger(color of stinger, length of stinger, initial xPos, yPos)
moveStinger( xPos, yPos ) changes xPos and yPos of stinger
makeStinger() draws stinger at stored coordinates
*/

class Stinger {

  constructor(tmpClr, stingerLength, bulbY, bulbX) {
    //sets up values
    this.clr = tmpClr;
    this.stingerShake = 0;
    this.stngrLgt = stingerLength;
    //sets up x and y
    var tentX = [];
    var tentY = [];
    for (let i = 0; i < stingerLength; i++) {
      tentX[i] = bulbX;
      tentY[i] = bulbY;
    }
    //makes into a this.
    this.tentX = tentX;
    this.tentY = tentY;
  }
  
  makeStinger() {
    //draws stinger from coordinates in array
    for (let i = 1; i < this.stngrLgt; i++) {
      strokeWeight(1);
      stroke(this.clr+"B3");
      let prevX = this.tentX[i - 1];
      let prevY = this.tentY[i - 1];
      line(prevX, prevY, this.tentX[i], this.tentY[i]);
    }
  }

  moveStinger(newX, newY) {
    //adjusts array with noise
    for (let i = 0; i < this.stngrLgt; i++) {
      //calculates noise
      let xChange = map(noise(this.stingerShake, 0), 0, 1, -5, 5);
      //sets new coordinates
      this.tentX[i] = newX + xChange;
      this.tentY[i] = newY + (i);
      //adds to offset
      this.stingerShake += 0.05;
    }
  }
}