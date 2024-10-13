<?php
$pageName = "cooking";
$cssName = $pageName;

$displayElementFilename = isset($id) ? "recipe-display.php" : "recipe-list.php";
define('RECIPE_ID', $id);
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<?php include ELEMENTS_PATH_COOKING . $displayElementFilename ?>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>