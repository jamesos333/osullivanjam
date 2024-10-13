<?php
function createAndPopulateList() {
    $listElementTemplate = getRecipeListTemplate();
    $recipeList = getRecipeListJson();
    $recipeListHtml = "";

    foreach ($recipeList as $currentListItem) {
        $fullRecipe = getFullRecipeJson($currentListItem["file"]);
        $image = IMAGE_PATH_COOKING . $fullRecipe["image"];
        $recipeListHtml .= str_replace(
            array("%ID%", "%FILE%", "%TITLE%", "%TIME%", "%TAGS%", "%IMAGE%"),
            array(
                $currentListItem["id"],
                $currentListItem["file"],
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

function getRecipeListTemplate() {
    $html = getFileTextContent(HTML_PATH_COOKING . "recipe-list-element.html");
    return $html;
}
?>

<div class="recipe-list-container">
    <?= createAndPopulateList() ?>
</div>