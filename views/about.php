<?php
include ELEMENTS_PATH_ABOUT . "manifesto.php";
$version = $id ?? MANIFESTO_FULL_JSON["default"];
$isDefault = $version == MANIFESTO_FULL_JSON["default"];

$pageName = $isDefault ? "about" : ("about v" . $version);
$cssName = "about";
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

<div preload="mouseover" preload-images="true" class="wrapper">
    <div class="textcontainer">
        <div class="subquote version-disclaimer" style="<?= $isDefault ? "display: none" : "" ?>">
            <a href="/about">this page is outdated, click here for the most recent version</a>
        </div>

        <?= getManifestoHtmlByVersion($version) ?>
        <div class="rightbox" style='max-height:<?= getLogoPanelHeightByVersion($version) ?>;'>
            <h3>Powered By</h3>
            <?= getLogoPanel() ?>
        </div>
    </div>
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>