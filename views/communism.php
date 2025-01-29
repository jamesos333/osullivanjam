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
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est recusandae nostrum nihil? Iure iusto cumque,
    commodi ipsam quia est accusamus labore voluptas quaerat sit numquam praesentium minus? Dolores, unde iusto.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam eius numquam magnam sit consequuntur unde
    sapiente veniam.
</div>

<div class="section-container">
    <div class="section-title">Introduction to Marxism</div>

    <div class="section-links">
        <?= createLinksList() ?>
    </div>
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>