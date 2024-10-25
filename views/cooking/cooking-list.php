<?php
include ELEMENTS_PATH_COOKING . "recipe-list.php";
$pageName = "cooking";
$cssName = $pageName;
$description = "cooking - yes, desire is so different when god bore you hungry";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class="recipe-list-container">
    <?= createAndPopulateList() ?>
    <blockquote>
        <p class="soupquote">I'm afraid they'll take Pieces of me, and I'll be too scared To say
            no. Bit by bit I'll disappear Until there's nothing left to give.
        </p>
    </blockquote>
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>