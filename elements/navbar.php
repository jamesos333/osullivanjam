<?php 
include_once 'config.php';
?>
<div class="wrapper navbar">
    <div class="leftpane">
        <p class="description">
            <a href="/"><img src="<?php echo IMAGE_PATH_NAVBAR . 'skeletonhand.png';?>" alt="back"></a>
        </p>
    </div>
    <div class="rightpane">
        <p class="description">
            <?php echo $pageName;?>
        </p>
    </div>
</div>