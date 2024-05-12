<?php
    include_once 'config.php';
    $scrollingTextPath = MSCL_PATH . 'scrollingtext.txt';
    $scrollingText = getFileTextContent($scrollingTextPath);
?>

<div class="scrollingtext">
    <p class="marquee">
        <span class="marqueetext"><?php echo $scrollingText;?></span>
        <span aria-hidden="true" class="marqueetext"><?php echo $scrollingText;?></span>
    </p>
</div>