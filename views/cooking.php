<?php
$pageName = "cooking";
$cssName = $pageName;
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class="recipe-list-container">

    <div class="recipe-list-item">
        <a href="?recipe=chili">
            <div class="recipe-thumbnail">
                <img class="recipe-thumbnail" src="<?= IMAGE_PATH_COOKING . 'chili.webp' ?>" alt="">
            </div>
            <div class="recipe-details">
                <div class="name">World Famous Chili</div>
                <div class="time">~1 Hour</div>
                <div class="tags">easy, fast, one pot, pressure cooker</div>
            </div>
        </a>
    </div>

    <div class="recipe-list-item">
        <a href="?recipe=chili">
            <div class="recipe-thumbnail">
                <img class="recipe-thumbnail" src="<?= IMAGE_PATH_COOKING . 'chickensoup.webp' ?>" alt="">
            </div>
            <div class="recipe-details">
                <div class="name">Chicken Soup</div>
                <div class="time">~2-3 Hours</div>
                <div class="tags">easy, one pot, stovetop</div>
            </div>
        </a>
    </div>

</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>