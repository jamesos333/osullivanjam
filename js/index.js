var scrollingText = "- YOUR IP ADDRESS HAS BEEN LOGGED AND WILL BE HELD INDEFINITELY - <span style=\"color: #ff0000\">YOU ARE NOW ENTERING THE FREE WORLD</span>"
    + " - BY CONNECTING TO THIS WEBSITE YOU REVOKE OWNERSHIP OF EVERY ORGAN IN YOUR BODY";

// adds scrolling text content
const scroll = document.querySelectorAll('[id=marqueetext]');
console.log(scroll);
document.querySelectorAll('[id=marqueetext]')[0].innerHTML = scrollingText;
document.querySelectorAll('[id=marqueetext]')[1].innerHTML = scrollingText;