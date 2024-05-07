<?php
include_once 'config.php';
$copyrightPath = MSCL_PATH . 'copyright.txt';
?>

<div class="copyright">
    <?php echo getFileTextContent($copyrightPath);?>
</div>