<?php
function createAndPopulateList() {
    $listElementTemplate = getRecipeListElement();
    $recipeFiles = array_column(getRecipeListJson(), "file");
    $recipeListHtml = "";

    foreach ($recipeFiles as $currentFile) {
        $fullRecipe = getFullRecipeJson($currentFile);
        $image = IMAGE_PATH_COOKING . $fullRecipe["image"];
        $recipeListHtml .= str_replace(
            array("%ID%", "%FILE%", "%TITLE%", "%TIME%", "%TAGS%", "%IMAGE%"),
            array(
                $fullRecipe["id"],
                $currentFile,
                $fullRecipe["title"],
                $fullRecipe["time"],
                $fullRecipe["tags"],
                $image
            ),
            $listElementTemplate
        );
    }
    return $recipeListHtml;
}

function getFullRecipeJson($fileName) {
    $json = getFileTextContent(JSON_PATH_COOKING_RECIPES . $fileName);
    return json_decode($json, true);
}

function getRecipeListJson() {
    $json = getFileTextContent(JSON_PATH_COOKING . "recipes-list.json");
    return json_decode($json, true);
}

function getRecipeListElement() {
    $json = getFileTextContent(HTML_PATH_COOKING . "recipe-list-element.html");
    return $json;
}
?>

<div class="recipe-list-container">
    <?= createAndPopulateList() ?>
</div>