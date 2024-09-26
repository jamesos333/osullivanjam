<?php
date_default_timezone_set("America/New_York");
$allImages = array(
    array("mycoworkerbelosinghismind_cropped.jpg",  "filter: hue-rotate(90deg);"),
    array("appreciationstation_cropped.jpg",        "filter: contrast(200%) hue-rotate(90deg);"),
    array("bodywithoutorgans2.png",                 "")
);
$iotdIndex = abs(round(time() / 86400)) % count($allImages);
$iotdLink = $allImages[$iotdIndex][0];
$iotdStyle = $allImages[$iotdIndex][1];
?>
<div class="image-of-the-day">
    <img src="<?= IMAGE_PATH_INDEX_DAILY . $iotdLink ?>" alt="image of the day" style="<?= $iotdStyle ?>">
</div>