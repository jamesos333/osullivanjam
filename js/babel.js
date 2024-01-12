const prod = false;
var baseUrl = 'https://osullivanjam.es/babel/';
const urls = ['adjectives.txt', 'nouns.txt', 'verbs.txt', 'adverbs.txt', 'subjects.txt', "indirectobjects.txt", "directobjects.txt"];
var wordLists = new Array(urls.length);
// file IDs
//       adjectives: 0
//            nouns: 1
//            verbs: 2
//          adverbs: 3
//         subjects: 4
// indirect objects: 5
//   direct objects: 6
const sentenceStructures = ['01', '425,6!', '425,6', '04,213', '42;12', '1251', '421?', '426;4,6'];

if(!prod){
    baseUrl = "http://127.0.0.1:5500/babel/";
}

createAndInsertSentence()

// Gets a reference to the image element by its ID
const imageElement = document.getElementById("stone");
// Adds a click event listener to the image element
imageElement.addEventListener("click", async function() {
    try {
        const result = await createAndInsertSentence();
    } catch (error) {
        console.error("An error occurred:", error);
    }
});

// generates the sentence and then inserts it into the html page
async function createAndInsertSentence() {
    const chosenStruct = sentenceStructures[getRandomInt(sentenceStructures.length)];
    console.log("Chosen Structure: " + chosenStruct);

    let sentence = await generateSentence(chosenStruct);
    document.querySelectorAll('.wordofgod')[0].innerHTML += sentence;
}

// generates a random sentence in accordance with the structure input
// if a character in the input is not a number it will add it to the sentence
async function generateSentence(structure) {
    let sentence = "";
    var current;
    var isInt;
    for (let i = 0; i < structure.length; i++) {
        current = structure.charAt(i);
        isInt = Number.isInteger(parseInt(current, 10))
        if (isInt) {
            sentence += " ";
            sentence += await getWordList(current);
        } else {
            sentence += current;
        }
    }
    // adds a period if there is no ending punctuation isn't there
    if (isInt) {
        sentence += ".";
    }
    console.log(sentence);
    return sentence;
}

// takes the fileId (the place in the URL/wordlist array of the file) and selects a random word from it.
// if the file isn't in an array yet it will create one for it
async function getWordList(fileId) {
    var randomWord
    if (wordLists[fileId] == null) {
        try {
            const fileUrl = baseUrl + urls[fileId];
            const response = await fetch(fileUrl);
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const data = await response.text();
            const newWordList = data.split("\n");
            wordLists[fileId] = newWordList;
            //console.log(fileUrl);
        } catch (error) {
            console.error('There was a problem with the fetch operation:', error);
        }
    }
    randomWord = wordLists[fileId][getRandomInt(wordLists[fileId].length)];
    randomWord = randomWord.toLowerCase().trim();
    console.log(fileId + " " + randomWord);
    return randomWord;
}

// gets a random number between 0 and the max
function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}