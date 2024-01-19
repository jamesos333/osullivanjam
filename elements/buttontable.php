<?php
$aboutButton = array("/", "img/buttons/button_about.png", "about", "button comingsoon");
$faqButton = array("faq.php", "img/buttons/button_faq.png", "faq", "button");
$buttonArray = array(
    array("babel.php", "img/buttons/button_contact.png", "contact", "button"),
    array("/", "img/buttons/button_photos.png", "photos", "button comingsoon"),
    array("/", "img/buttons/button_music.png", "music", "button comingsoon"),
    array("/", "img/buttons/button_movies.png", "movies", "button comingsoon"),
    array("https://github.com/jamesos333/osullivanjam", "img/buttons/button_github.png", "github", "button"),
    array("/", "img/buttons/button_experience.png", "experience", "button comingsoon")
);
shuffle($buttonArray);

function createButton($buttonParameters){
    $linkHref = $buttonParameters[0];
    $imgSrc = $buttonParameters[1];
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
        <th><img src="img/eye.gif" alt="eye" style="width: 84%"></th>
        <th><?php createButton($buttonArray[3])?></th>
    </tr>
    <tr>
        <th><?php createButton($buttonArray[4])?></th>
        <th><?php createButton($buttonArray[5])?></th>
        <th><?php createButton($faqButton)?></th>
    </tr>
</table>