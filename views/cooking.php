<?php
$pageName = "cooking";
$cssName = $pageName;

$displayFileName = isset($urlRecipeId) ? "recipe-display.php" : "recipe-list.php";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<?php include ELEMENTS_PATH_COOKING . $displayFileName ?>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>