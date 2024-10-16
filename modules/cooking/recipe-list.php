<?php
include ELEMENTS_PATH_COOKING . "recipe-shared.php";

function createAndPopulateList() {
    $template = getFileTextContent(HTML_PATH_COOKING . "recipe-list-element.html");
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
            $template
        );
    }
    return $recipeListHtml;
}
