// a custom sentence structure is possible by using the URL parameter 'customStructure'
const urlParams = new URLSearchParams(window.location.search);
const baseUrl = window.location.href.split('/').slice(0, 3).join('/');
const chatboxTemplate = document.getElementsByClassName('chatbox')[0].outerHTML;
var urls = ['adjectives.txt', 'nouns.txt', 'verbs.txt', 'adverbs.txt', 'subjects.txt', "indirectobjects.txt", "directobjects.txt", "conjunctions.txt", "pluralnouns.txt"];
var wordLists = new Array(urls.length);
// file IDs
//       adjectives: 0
//            nouns: 1
//            verbs: 2
//          adverbs: 3
//         subjects: 4
// indirect objects: 5
//   direct objects: 6
//     conjunctions: 7
//     plural nouns: 8
const sentenceStructures = [
    '01', '210', '251',
    '5120', '5201', '102',
    '425,6!', '452,6!', '4,526',
    '04,213',
    '42;12',
    '82;12',
    '1251', '1125',
    '421?',
    '426;4,6',
    '1:0,0,0, and 0.',
    '5315,01'
];
var counter = 0;

createAndInsertSentence();

// Gets a reference to the image element by its ID
const imageElement = document.getElementById("stone");
// Adds a click event listener to the image element
imageElement.addEventListener("click", async function () {
    try {
        await createAndInsertSentence();
    } catch (error) {
        console.error("An error occurred:", error);
    }
});

// generates the sentence and then inserts it into the html page
async function createAndInsertSentence() {
    var chosenStruct = makeSentenceStructure(1 + getRandomInt(2));
    insertNewSentence(await generateSentence(chosenStruct));
}

// generates a sentence structure, the length determines how many conjunctions it will use
function makeSentenceStructure(length) {
    if (urlParams.has('customStructure')) {
        return urlParams.get('customStructure');
    }
    var structure = "7";
    for (let i = 0; i < length; i++) {
        structure += sentenceStructures[getRandomInt(sentenceStructures.length)];
        // attempts to prevent long runon sentences
        if (structure.length > i * 6 && integerCheck(structure.charAt(structure.length - 1))) {
            structure += ". "
        } else {
            structure += "7";
        }
    }
    structure += sentenceStructures[getRandomInt(sentenceStructures.length)];
    console.log("Chosen Structure: " + structure);
    return structure;
}

async function insertNewSentence(sentence) {
    insertNewChatbox();
    var chatboxes = document.querySelectorAll('[id=chatbox]');
    var chatboxContainers = document.querySelectorAll('.chatbox');
    //console.log(chatboxContainers);
    if( chatboxContainers.length > 1 ){
        chatboxContainers[chatboxContainers.length - 2].style.animation = 'null';
    }
    chatboxContainers[chatboxContainers.length - 1].style.animation = 'fadeIn 1s';
    chatboxes[chatboxes.length - 1].innerHTML = sentence;
}

// inserts a new chatbox element if needed
function insertNewChatbox(){
    if(counter > 0){
        document.querySelectorAll('[id=wizardcontainer]')[0].innerHTML += chatboxTemplate;
    }
    counter++;
}

// generates a random sentence in accordance with the structure input
// if a character in the input is not a number it will add it to the sentence
async function generateSentence(structure) {
    let sentence = "";
    var current;
    var isInt;
    for (let i = 0; i < structure.length; i++) {
        current = structure.charAt(i);
        isInt = integerCheck(current);
        if (isInt) {
            sentence += " ";
            sentence += await getWordList(current);
        } else {
            sentence += current;
        }
    }
    // adds a period if there is no ending punctuation isn't there
    if (isInt) {
        sentence += ". ";
    } else {
        sentence += " ";
    }
    console.log(sentence);
    return sentence;
}

// takes the fileId (the place in the URL/wordlist array of the file) and selects a random word from it.
// if the file isn't in an array yet it will create one for it
async function getWordList(fileId) {
    var randomWord;
    if (wordLists[fileId] == null) {
        const fileUrl = baseUrl + "/files/txt/wordlists/" + urls[fileId];
        const data = await fetchData(fileUrl);
        const newWordList = data.split("\n");
        wordLists[fileId] = newWordList;
        //console.log(fileUrl);
        //console.log(newWordList);
    }
    randomWord = wordLists[fileId][getRandomInt(wordLists[fileId].length)];
    randomWord = randomWord.toLowerCase().trim();
    console.log(fileId + " " + randomWord);
    return randomWord;
}

async function fetchData(fileUrl) {
    try {
        const response = await fetch(fileUrl);
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return await response.text();
    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
    }
}

// gets a random number between 0 and the max
function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

function integerCheck(input) {
    return Number.isInteger(parseInt(input, 10));
}