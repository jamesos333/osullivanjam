<div class="wrapper navbar">
    <div class="leftpane">
        <p class="navbar-element left">
            <a preload="mouseover" preload-images="true" href="<?= isset($backLink) ? $backLink : "/" ?>">
                <img src="<?= IMAGE_PATH_NAVBAR . 'skeletonhand.png' ?>" alt="back">
            </a>
        </p>
    </div>
    <div class="rightpane">
        <p class="navbar-element right">
            <?= $pageName ?>
        </p>
    </div>
</div>