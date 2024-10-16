<?php
include ELEMENTS_PATH_COOKING . "recipe-shared.php";

function createRecipeDisplay($recipe) {
    $steps = getAndPopulateStepTemplate($recipe);
    $ingredients = getAndPopulateIngredientTemplate($recipe);
    return populateRecipeTemplate($recipe, $steps, $ingredients);
}

function populateRecipeTemplate($recipe, $steps, $ingredients) {
    $template = getFileTextContent(HTML_PATH_COOKING . "recipe-display-main.html");
    $image = IMAGE_PATH_COOKING . $recipe["image"];
    return str_replace(
        array("%TITLE%", "%DESCRIPTION%", "%IMAGE%", "%INGREDIENTS%", "%STEPS%"),
        array(
            $recipe["title"],
            $recipe["description"],
            $image,
            $ingredients,
            $steps
        ),
        $template
    );
}

function getAndPopulateIngredientTemplate($recipe) {
    $template = getFileTextContent(HTML_PATH_COOKING . "recipe-display-ingredient.html");
    $element = "";
    foreach ($recipe["ingredients"] as $ingredient) {
        $element .= str_replace(
            array("%INGREDIENT%"),
            array($ingredient),
            $template
        );
    }
    return $element;
}

function getAndPopulateStepTemplate($recipe) {
    $template = getFileTextContent(HTML_PATH_COOKING . "recipe-display-step.html");
    $element = "";
    $counter = 1;
    foreach ($recipe["steps"] as $step) {
        $title = "Step " . $counter;
        $element .= str_replace(
            array("%TITLE%", "%DESCRIPTION%"),
            array($title, $step["description"]),
            $template
        );
        $counter++;
    }
    return $element;
}

function getAndValidateRecipeJson($recipe_id) {
    // validating
    $recipe_list = getRecipeListJson();
    $index = array_search($recipe_id, array_column($recipe_list, "id"));
    if (is_null($recipe_id) || $index === false) {
        redirectTo404();
    }
    // getting
    $filename = $recipe_list[$index]["file"];
    return getFullRecipeJson($filename);
}
