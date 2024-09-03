<?php
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
    <?php include ELEMENTS_PATH_ABOUT . 'manifesto.php' ?>
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>