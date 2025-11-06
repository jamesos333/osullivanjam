<?php
include ELEMENTS_PATH_FLASH . "flash-helper.php";
$pageName = "flash games";
$cssName = 'flash';
$backLink = "/projects";
$description = "play flash games online";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<?= getFullFlashGameGrid() ?>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>