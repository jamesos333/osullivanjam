<?php
include_once 'config.php';
$aboutButton = array("about.php", "button_about.png", "about", "button");
$faqButton = array("faq.php", "button_faq.png", "faq", "button");
$buttonArray = array(
    array("babel.php", "button_contact.png", "contact", "button"),
    array("/", "button_photos.png", "photos", "button comingsoon"),
    array("/", "button_music.png", "music", "button comingsoon"),
    array("/", "button_movies.png", "movies", "button comingsoon"),
    array("/", "button_experience.png", "experience", "button comingsoon"),
    array("https://github.com/jamesos333/osullivanjam", "button_github.png", "github", "button")
);
shuffle($buttonArray);

function createButton($buttonParameters){
    $linkHref = $buttonParameters[0];
    $imgSrc = IMAGE_PATH_BUTTONS . $buttonParameters[1];
    $imgAlt = $buttonParameters[2];
    $imgClass = $buttonParameters[3];
    echo "<a href='$linkHref'><img src='$imgSrc' alt='$imgAlt' class='$imgClass'></a>";
}
?>

<table class="buttontable">
    <tr>
        <th><?php createButton($aboutButton)?></th>
        <th><?php createButton($buttonArray[0])?></th>
        <th><?php createButton($buttonArray[1])?></th>
    </tr>
    <tr>
        <th><?php createButton($buttonArray[2])?></th>
        <th><img src= "<?php echo IMAGE_PATH_INDEX . 'eye.gif';?>" alt="eye" style="width: 84%; padding: 0.5em 0px"></th>
        <th><?php createButton($buttonArray[3])?></th>
    </tr>
    <tr>
        <th><?php createButton($buttonArray[4])?></th>
        <th><?php createButton($buttonArray[5])?></th>
        <th><?php createButton($faqButton)?></th>
    </tr>
</table>