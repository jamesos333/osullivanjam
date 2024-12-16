<?php
function wordToElement($word) {
    $element = "";
    foreach (str_split($word) as $letter) {
        $element .= "<img src='" . IMAGE_PATH_LETTERS . $letter . ".gif' width='150px' height='150px' alt=''>";
    }
    return $element;
}
?>

<div class="container">
    <div class="header">
        <a preload="mousedown" preload-images="true" href="/" aria-label="header">
            <div class="name">
                <?= wordToElement('james') ?>
            </div>
            <div class="name">
                <?= wordToElement('osullivan') ?>
            </div>
        </a>
    </div>
</div>