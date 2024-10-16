<?php
include ELEMENTS_PATH_COOKING . "recipe-display.php";
$recipe = getAndValidateRecipeJson($id ?? "");

$pageName = strtolower($recipe["title"]) . " recipe";
$cssName = "cooking";
$backLink = "/cooking";
$description = $recipe["description"];
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<?= createRecipeDisplay($recipe) ?>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>