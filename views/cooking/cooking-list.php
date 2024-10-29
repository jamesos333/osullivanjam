<?php
include ELEMENTS_PATH_COOKING . "recipe-list.php";
$pageName = "cooking";
$cssName = $pageName;
$description = "cooking - yes, desire is so different when god bore you hungry";
$soupQuotes = [
    "You will never let go, you will never be satiated, you will be damaged and scarred, you will continue to hunger.",
    "I'm afraid they'll take Pieces of me, and I'll be too scared To say no. Bit by bit I'll disappear Until there's nothing left to give."
];
shuffle($soupQuotes);
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class="recipe-list-container">
    <?= createAndPopulateList() ?>
    <blockquote>
        <p class="soupquote"><?= $soupQuotes[0] ?></p>
    </blockquote>
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>