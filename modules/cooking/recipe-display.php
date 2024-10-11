<?php
$recipe = getRecipeJson('chili.json');

function getRecipeJson($fileName) {
    $json = getFileTextContent(JSON_PATH_COOKING_RECIPES . $fileName);
    return json_decode($json, true);
}
?>


<div class="recipe-main-display">
    <div class="left">
        <img src="<?= IMAGE_PATH_COOKING . $recipe["image"] ?>" alt="Recipe Thumbnail">
        <ul class="ingredient-container">
            <li>
                <h2>Ingredients</h2>
            </li>
            <li><input type="checkbox">2 pounds lean ground beef</li>
            <li><input type="checkbox">1 onion</li>
            <li><input type="checkbox">1 jalapeño</li>
            <li><input type="checkbox">4 cloves garlic</li>
            <li><input type="checkbox">2 ½ tablespoons chili powder</li>
            <li><input type="checkbox">1 teaspoon cumin</li>
            <li><input type="checkbox">1 green bell pepper</li>
            <li><input type="checkbox">14.5 ounces crushed tomatoes</li>
            <li><input type="checkbox">19 ounces canned red kidney beans</li>
            <li><input type="checkbox">14.5 ounces canned diced tomatoes</li>
            <li><input type="checkbox">1 ½ cups beef broth</li>
            <li><input type="checkbox">1 tablespoon tomato paste</li>
        </ul>
    </div>
    <div class="right">
        <h1>World Famous Chili</h1>
        <h2>The recipe for my world famous chili, it has been aggregated from many different websites and family
            traditions, I so graciously am sharing it here for all to enjoy. Some additional tips- feel free to
            ad-lib whatever vegetables you want; the more the better!</h2>
        <div class="steps-container">
            <div class="step-item">
                <div class="step-title">Step 1</div>
                <div class="step-description">
                    <p>Combine ground beef and 1 ½ tablespoons chili powder.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-title">Step 2</div>
                <div class="step-description">
                    <p>In a large pot, brown ground beef, onion, jalapeno, and garlic. Drain any fat.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-title">Step 3</div>
                <div class="step-description">
                    <p>Add in remaining ingredients and bring to a boil. Reduce heat and simmer uncovered 45-60 minutes or until chili has reached desired thickness.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-title">Step 4</div>
                <div class="step-description">
                    <p>Top with cheddar cheese, green onions, cilantro or other favorite toppings.</p>
                </div>
            </div>
        </div>
    </div>
</div>