<?php
include ELEMENTS_PATH_COOKING . "recipe-list.php";
$pageName = "cooking";
$cssName = $pageName;
$description = "desire is so different when god bore you hungry";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class="recipe-list-container">
    <?= createAndPopulateList() ?>
    <blockquote>
        <p class="lavaquote">i'm afraid they'll take pieces of me, and i'll be too scared to say
            no. bit by bit i'll disappear until there's nothing left to give.
        </p>
    </blockquote>
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>