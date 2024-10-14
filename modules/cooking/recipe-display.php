<?php
function createAndPopulateRecipe() {
    $recipe = getAndValidateRecipeJson();
    $steps = populateStepTemplate($recipe);
    $ingredients = populateIngredientTemplate($recipe);
    return populateRecipeTemplate($recipe, $steps, $ingredients);
}

function populateRecipeTemplate($recipe, $steps, $ingredients) {
    $template = getFileTextContent(HTML_PATH_COOKING . "recipe-main-display.html");
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

function populateIngredientTemplate($recipe) {
    $template = getFileTextContent(HTML_PATH_COOKING . "recipe-main-ingredient.html");
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

function populateStepTemplate($recipe) {
    $template = getFileTextContent(HTML_PATH_COOKING . "recipe-main-step.html");
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

function getAndValidateRecipeJson() {
    // validating
    $recipeList = json_decode(getFileTextContent(JSON_PATH_COOKING . "recipes-list.json"), true);
    $index = array_search(RECIPE_ID, array_column($recipeList, "id"));
    if (is_null(RECIPE_ID) || ($index === false)) {
        redirectTo404();
    }
    // getting
    $filename = $recipeList[$index]["file"];
    $json = getFileTextContent(JSON_PATH_COOKING_RECIPES . $filename);
    return json_decode($json, true);
}
?>

<?= createAndPopulateRecipe() ?>