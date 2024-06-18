<?php
    include_once '_config.php';
    $pageName = "loading...";
    $cssName = "index";
?>
<?php include ELEMENTS_PATH_TEMPLATES . 'top.php'; ?>

    <img src="<?=IMAGE_PATH_LOADING . 'bouncing-circles.svg'; ?>" alt="loading" class="center" style="max-width: 200px; padding: 200px 0px">

<?php include ELEMENTS_PATH_TEMPLATES . 'bottom.php'; ?>