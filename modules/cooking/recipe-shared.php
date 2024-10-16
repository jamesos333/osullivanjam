<?php
function getFullRecipeJson($fileName) {
    $json = getFileTextContent(JSON_PATH_COOKING_RECIPES . $fileName);
    return json_decode($json, true);
}

function getRecipeListJson() {
    $json = getFileTextContent(JSON_PATH_COOKING . "recipes-list.json");
    return json_decode($json, true);
}
