<?php
    $scrollingTextFile = fopen("mscl/scrollingtext.txt", "r") or die("Unable to open file!");
    $scrollingText = fread($scrollingTextFile, filesize("mscl/scrollingtext.txt"));
    fclose($scrollingTextFile);
?>

<div id="scrollingtext">
    <p class="marquee">
        <span id="marqueetext"><?php echo $scrollingText;?></span>
        <span aria-hidden="true" id="marqueetext"><?php echo $scrollingText;?></span>
    </p>
</div>