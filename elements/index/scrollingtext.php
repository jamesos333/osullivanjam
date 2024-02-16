<?php
    include_once 'config.php';
    $scrollingTextPath = MSCL_PATH . 'scrollingtext.txt';
    $scrollingText = getText($scrollingTextPath);
?>

<div id="scrollingtext">
    <p class="marquee">
        <span id="marqueetext"><?php echo $scrollingText;?></span>
        <span aria-hidden="true" id="marqueetext"><?php echo $scrollingText;?></span>
    </p>
</div>