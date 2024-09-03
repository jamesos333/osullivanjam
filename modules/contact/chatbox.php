<?php
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
function createCustomSentence() {
    $urls = array("adjectives.txt", "nouns.txt", "verbs.txt", "adverbs.txt", "subjects.txt", "indirectobjects.txt", "directobjects.txt", "conjunctions.txt", "pluralnouns.txt");
    $sentenceStructures = array(
        '01',
        '210',
        '251',
        '5120',
        '5201',
        '102',
        '425,6!',
        '452,6!',
        '4,526',
        '04,213',
        '42;12',
        '82;12',
        '1251',
        '1125',
        '421?',
        '426;4,6',
        '1:0,0,0, and 0.',
        '5315,01'
    );
    shuffle($sentenceStructures);
    $structure = getSentenceStructure(random_int(1, 3), $sentenceStructures);
    return generateSentence($urls, $structure);
}

function generateSentence($urls, $structure) {
    $sentence = "";
    foreach (str_split($structure) as $char) {
        if (is_numeric($char)) {
            $sentence .= " ";
            $sentence .= getRandomWord($urls[$char]);
        } else {
            $sentence .= $char;
        }
    }
    return $sentence;
}

function getSentenceStructure($length, $sentenceStructures) {
    $structure = "7";
    for ($i = 0; $i < $length; $i++) {
        $structure .= $sentenceStructures[$i];
        // checks for end punctuation
        if (is_numeric(substr($structure, -1))) {
            $structure .= ".";
        }
    }
    return $structure;
}

function getRandomWord($urlName) {
    $f_contents = file(WORDLIST_PATH_CONTACT . $urlName);
    $line = $f_contents[rand(0, count($f_contents) - 1)];
    return strtolower(trim($line));
}
?>

<div class="chatbox">
    <img src="<?= IMAGE_PATH_CONTACT . 'wizard2.gif'; ?>" alt="wizard profile photo">
    <p id="chatbox"><?= createCustomSentence() ?></p>
    <span class="time-right">-The Wise One</span>
</div>