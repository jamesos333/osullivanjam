<?php 
include_once 'config.php';
?>
<div class="wrapper navbar">
    <div id="leftpane">
        <p class="description">
            <a href="/"><img src="<?php echo IMAGE_PATH_NAVBAR . 'skeletonhand.png';?>" alt="back"></a>
        </p>
    </div>
    <div id="rightpane">
        <p class="description">
            <?php echo $pageName;?>
        </p>
    </div>
</div>