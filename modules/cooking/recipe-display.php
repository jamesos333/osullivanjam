<?php
include ELEMENTS_PATH_COOKING . "recipe-shared.php";

function createRecipeDisplay($recipe) {
    $steps = getAndPopulateStepTemplate($recipe);
    $ingredients = getAndPopulateIngredientTemplate($recipe);
    $sources = getAndPopulateSourcesTemplate($recipe);
    return populateRecipeTemplate($recipe, $sources, $steps, $ingredients);
}

function populateRecipeTemplate($recipe, $sources, $steps, $ingredients) {
    $template = getFileTextContent(HTML_PATH_COOKING . "recipe-display-main.html");
    $image = IMAGE_PATH_COOKING . $recipe["image"];
    return str_replace(
        array("%TITLE%", "%DESCRIPTION%", "%TIME%", "%TAGS%", "%SOURCES%", "%IMAGE%", "%INGREDIENTS%", "%STEPS%"),
        array(
            $recipe["title"],
            $recipe["description"],
            $recipe["time"],
            $recipe["tags"],
            $sources,
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

function getAndPopulateSourcesTemplate($recipe) {
    $template = "<a class='source-link' href='%SOURCE-LINK%'>%SOURCE-NAME%</a> ";
    $element = "";
    if (sizeof($recipe["sources"]) == 0) {
        $element = "<a class='source-link'>[none]</a> ";
    }
    foreach ($recipe["sources"] as $source) {
        $source_name = '[' . $source . ']';
        $element .= str_replace(
            array("%SOURCE-LINK%", "%SOURCE-NAME%"),
            array($source, $source_name),
            $template
        );
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
