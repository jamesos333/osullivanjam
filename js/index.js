var scrollingText = "YOU ARE NOW EXITING THE FREE WORLD - YOUR IP ADDRESS HAS BEEN LOGGED AND YOUR INFORMATION "
    + "HAS BEEN SENT TO ALL GOVERNMENTS WORLDWIDE - BY CONNECTING TO THIS WEBSITE YOU GIVE US PERMISSION "
    + "TO REPOSSESS EVERY ORGAN IN YOUR BODY";

// adds scrolling text content
const scroll = document.querySelectorAll('[id=marqueetext]');
console.log(scroll.length);
scroll[0].textContent = scrollingText;
scroll[1].textContent = scrollingText;