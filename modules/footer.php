<?php
    date_default_timezone_set("America/New_York");
    $date = date("m-d-y h:i:sa");
    $copyrightPath = MSCL_PATH . 'copyright.txt';
    $copyrightString = getFileTextContent($copyrightPath);
    $copyrightString = str_replace('DATE_HERE', $date, $copyrightString);
?>

<div class="copyright">
    <?php echo $copyrightString;?>
</div>