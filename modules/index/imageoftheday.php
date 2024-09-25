<?php
date_default_timezone_set("America/New_York");
$allImages = array(
    array("appreciationstation_cropped.jpg",        ""),
    array("mycoworkerbelosinghismind_cropped.jpg",  "")
);
$iotdIndex = abs(round(time() / 86400)) % count($allImages);
$iotdLink = $allImages[$iotdIndex][0];
$iotdStyle = $allImages[$iotdIndex][1];
$date = date("m/d/y");
?>
<div class="image-of-the-day">
    <img src="<?= IMAGE_PATH_INDEX_DAILY . $iotdLink ?>" alt="image of the day" style="<?= $iotdStyle ?>">
    <p>image of the day: <?= $date ?></p>
</div>