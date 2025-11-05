<?php
include ELEMENTS_PATH_FLASH . "flash-helper.php";
$pageName = "flash games";
$cssName = 'flash';
$description = "play flash games online";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class='projects-container'>

<?= getFullFlashGameGrid() ?>

</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>