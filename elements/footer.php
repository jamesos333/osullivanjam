<?php
include_once 'config.php';
$copyrightPath = MSCL_PATH . 'copyright.txt';
?>

<copyright id="copyright" class="center">
    <?php echo getFileTextContent($copyrightPath);?>
</copyright>