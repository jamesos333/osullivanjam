<?php
function createAndPopulateList() {
    $htmlListElement = getRecipeListElement();
    $recipes = getRecipeListJson();
    $recipeList = "";

    foreach ($recipes as $current) {
        $image = IMAGE_PATH_COOKING . $current["image"];
        $time = $current["time"] . " hours";
        $recipeList .= str_replace(
            array("%ID%", "%TITLE%", "%TIME%", "%TAGS%", "%IMAGE%", "%FILE%"),
            array(
                $current["id"],
                $current["title"],
                $time,
                $current["tags"],
                $image,
                $current["file"]
            ),
            $htmlListElement
        );
    }
    return $recipeList;
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