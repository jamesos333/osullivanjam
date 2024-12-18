<div class="wrapper navbar">
    <div class="leftpane">
        <p class="navbar-element left">
            <a preload="mousedown" preload-images="true" href="<?= $backLink ?? "/" ?>">
                <img src="<?= IMAGE_PATH_NAVBAR . 'skeletonhand.png' ?>" width="200" height="99" alt="back">
            </a>
        </p>
    </div>
    <div class="rightpane">
        <p class="navbar-element right">
            <?= $pageName ?>
        </p>
    </div>
</div>