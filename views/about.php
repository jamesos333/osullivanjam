<?php
include_once '_config.php';
$pageName = "about";
$cssName = $pageName;
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class="warning">
    <div class="warning-left">
        <img src="<?= IMAGE_PATH_ABOUT . 'skull.gif'; ?>" alt="spinning skull">
    </div>
    <div class="warning-right">
        <p><span style="color: #ff0000; font-weight: 900">WARNING</span>: THIS WEBPAGE HOLDS A
            <span style="font-style: italic">DISEASE</span> WHICH HAS <span style="font-style: italic">NO</span> CURE.
        </p>
    </div>
</div>

<div class="wrapper">
    <div class="textcontainer">
        
        <?php include ELEMENTS_PATH_ABOUT . 'manifesto.php'; ?>

        <div class="rightbox">
            <h3>Powered By</h3>
            <img src="<?= IMAGE_PATH_ABOUT . 'ampmolecule.png'; ?>" alt="spinning molecule">
            <img src="<?= IMAGE_PATH_ABOUT . 'apachelogo.png'; ?>" alt="spinning apache logo">
            <img src="<?= IMAGE_PATH_ABOUT . 'spinningglobe3.gif'; ?>" alt="spinning globe">
            <img src="<?= IMAGE_PATH_ABOUT . 'phplogo.gif'; ?>" alt="spinning php logo">
            <img src="<?= IMAGE_PATH_ABOUT . 'esdomain.png'; ?>" alt="es domain logo">
            <img src="<?= IMAGE_PATH_ABOUT . 'sasslogo.png'; ?>" alt="sass logo">
            <img src="<?= IMAGE_PATH_ABOUT . 'html5logo.png'; ?>" alt="html 5 logo">
            <img src="<?= IMAGE_PATH_ABOUT . 'csslogo.png'; ?>" alt="css 3 logo">
            <img src="<?= IMAGE_PATH_ABOUT . 'noscriptlogo.png'; ?>" alt="no script logo">
        </div>

    </div>
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>