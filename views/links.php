<?php
include_once '_config.php';
$pageName = 'links';
$cssName = $pageName;
$useHtmx = true;
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div id="links-container">
    <?php include ELEMENTS_PATH_LINKS . 'linktable.php'; ?>
</div>

<blockquote>
    <p class="rainbowstaticquote">we can never be after anything because it Always Exists now and even in a world without history
        history will appear of its own accord cuz theres a need for it greater than most of the things we pretend are real.</p>
</blockquote>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>