// shuffles some of buttons with the exception of the first and the last ones
let buttonNode = document.querySelectorAll('.buttontable a');
let buttonArray = Array.from(buttonNode);
buttonArray.shift();
buttonArray.pop();
const shuffledButtonArray = buttonArray.sort((a, b) => 0.5 - Math.random());
//console.log(shuffledButtonArray);
for( var i = 0; i < shuffledButtonArray.length; i++ ) {
    var element = shuffledButtonArray[i].outerHTML;
    buttonNode.item(i+1).outerHTML = element;
}
