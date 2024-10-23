<?php
function getFullRecipeJson($fileName) {
    return getFileJsonContent(JSON_PATH_COOKING_RECIPES . $fileName);
}

function getRecipeListJson() {
    return getFileJsonContent(JSON_PATH_COOKING . "recipes-list.json");
}
