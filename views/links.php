<?php
include_once '_config.php';
$pageName = 'links';
$cssName = $pageName;
$useHtmx = true;

$disclaimerImages = array(
    'abandonallhope.gif',
    'chair.gif',
    'drvannacut.gif',
    'tv-static2.gif',
    'ghost.gif',
    'hauntedhouse1.gif',
    'hauntedhouse2.gif'
);
shuffle($disclaimerImages);
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class="disclaimer">
    <img src="<?= IMAGE_PATH_LINKS . $disclaimerImages[0] ?>" alt="disclaimer image">
    <div class="disclaimer-text">
        <p id="disclaimer-red">DISCLAIMER</p>
        <p>All of the links contained herein will direct you to external websites- I do not assume responsibility for the accuracy,
            completeness, or timeliness of the information contained therein.</p>
    </div>
</div>

<div id="full-element-container">
    <?php include ELEMENTS_PATH_LINKS . 'linktable.php'; ?>
</div>

<blockquote>
    <p class="rainbowstaticquote">we can never be after anything because it Always Exists now and even in a world without history
        history will appear of its own accord cuz theres a need for it greater than most of the things we pretend are real.</p>
</blockquote>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>