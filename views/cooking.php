<?php
$pageName = "cooking";
$cssName = $pageName;

$displayElementFilename = isset($urlRecipeId) ? "recipe-display.php" : "recipe-list.php";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<?php include ELEMENTS_PATH_COOKING . $displayElementFilename ?>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>