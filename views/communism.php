<?php
include ELEMENTS_PATH_COMMUNISM . "communism-helper.php";
$pageName = 'communism';
$cssName = $pageName;
$description = "the doctrine of the liberation of the proletariat";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class="title-container">
    <img src="<?= IMAGE_PATH_COMMUNISM . 'hammerandsickle1.svg'; ?>" alt="Hammer and Sickle">
    <h1>COMMUNISM</h1>
    <img src="<?= IMAGE_PATH_COMMUNISM . 'hammerandsickle1.svg'; ?>" alt="Hammer and Sickle">
</div>

<div class="subtitle-container">
    Don't be afraid comrade!! You have reached the osullivanjam.es center for marxist-leninist 
    studies. The topic has been of great interest to me for the past few years and I have been 
    devoting a lot of my personal time towards understanding marxist theory. The purpose of this 
    page is twofold: one is to keep track of what I have read and store my thoughts on the readings, 
    and secondly is to maintain a list of beginner readings for those who are just getting started 
    with marxist theory. Feel free to peruse and read at your own pace and do not be afraid to use 
    supplemental resources and read slowly. Good luck comrade! And fight on!!
</div>

<div class="section-container">
    <div class="section-title">Introduction to Marxism</div>

    <div class="section-links">
        <?= createLinksList() ?>
    </div>
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>