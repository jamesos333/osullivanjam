<?php
    $scrollingTextPath = MSCL_PATH . 'scrollingtext.txt';
    $scrollingText = getFileTextContent($scrollingTextPath);
?>

<div class="scrollingtext">
    <p class="marquee">
        <span class="marqueetext"><?=$scrollingText?></span>
        <span aria-hidden="true" class="marqueetext"><?=$scrollingText?></span>
    </p>
</div>