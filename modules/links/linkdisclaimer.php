<?php
$disclaimerImages = array(
    'abandonallhope.gif',
    'chair.gif',
    'drvannacut.gif',
    'tv-static2.gif',
    'ghost.gif',
    'hauntedhouse1.gif',
    'hauntedhouse2.gif',
    'evildeadlaugh.gif',
    'devil.gif',
    'devil2.gif',
    'nosferatu.gif',
    'nosferatu2.gif',
    'shadowspin.gif'
);
shuffle($disclaimerImages);
?>

<div class="disclaimer">
    <img src="<?= IMAGE_PATH_LINKS . $disclaimerImages[0] ?>" width="250" height="180" alt="disclaimer image">
    <div class="disclaimer-text">
        <p id="disclaimer-red">DISCLAIMER</p>
        <p>All of the links contained herein will direct you to external websites- I do not assume responsibility for the accuracy,
            completeness, or timeliness of the information therein contained.</p>
    </div>
</div>