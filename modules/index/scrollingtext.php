<?php
    $scrollingTextPath = HTML_PATH_INDEX . 'scrollingtext.html';
    $scrollingText = getFileTextContent($scrollingTextPath);
?>

<div class="scrollingtext">
    <p class="marquee">
        <span class="marqueetext"><?=$scrollingText?></span>
        <span aria-hidden="true" class="marqueetext"><?=$scrollingText?></span>
    </p>
</div>