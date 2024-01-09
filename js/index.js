var scrollingText = "- YOUR IP ADDRESS HAS BEEN LOGGED AND WILL BE HELD INDEFINITELY - <span style=\"color: #ff0000\">YOU ARE NOW ENTERING THE FREE WORLD</span>"
    + " - BY CONNECTING TO THIS WEBSITE YOU REVOKE OWNERSHIP OF EVERY ORGAN IN YOUR BODY";

// adds the scrolling text content
let scrollingTextNode = document.querySelectorAll('[id=marqueetext]');
scrollingTextNode.item(0).innerHTML = scrollingText;
scrollingTextNode.item(1).innerHTML = scrollingText;

// shuffles the background images
//document.querySelector('body').style.backgroundImage = 'url("../img/bg/6.gif")';

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
