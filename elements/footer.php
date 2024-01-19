<copyright id="copyright" class="center">
    <?php
    $copyright = fopen("mscl/copyright.txt", "r") or die("Unable to open file!");
    echo fread($copyright, filesize("mscl/copyright.txt"));
    fclose($copyright);
    ?>
</copyright>