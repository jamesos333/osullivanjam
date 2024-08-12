<?php
$githubLink = "https://github.com/jamesos333/osullivanjam";
$aboutButton =  array("about", "button_about.png", "about", "button");
$buttonArray = array(
    array("contact"     , "button_contact.png"      , "contact"     , "button"),
    array("cooking"     , "button_cooking.png"      , "cooking"     , "button comingsoon"),
    array("links"       , "button_links.png"        , "links"       , "button"),
    array("movies"      , "button_movies.png"       , "movies"      , "button"),
    array("experience"  , "button_experience.png"   , "experience"  , "button"),
    array($githubLink   , "button_github.png"       , "github"      , "button"),
    array("faq"         , "button_faq.png"          , "faq"         , "button")
);
shuffle($buttonArray);

function getButton($buttonParameters) {
    $linkHref = $buttonParameters[0];
    $imgSrc = IMAGE_PATH_BUTTONS . $buttonParameters[1];
    $imgAlt = $buttonParameters[2];
    $imgClass = $buttonParameters[3];
    return "<a href='$linkHref'><img src='$imgSrc' alt='$imgAlt' class='$imgClass'></a>";
}
?>

<table class="buttontable">
    <tr>
        <th><?= getButton($aboutButton) ?></th>
        <th><?= getButton($buttonArray[0]) ?></th>
        <th><?= getButton($buttonArray[1]) ?></th>
    </tr>
    <tr>
        <th><?= getButton($buttonArray[2]) ?></th>
        <th><a href='/moth'><img src="<?= IMAGE_PATH_INDEX . 'eye.gif' ?>" alt="eye" class="eye"></a></th>
        <th><?= getButton($buttonArray[3]) ?></th>
    </tr>
    <tr>
        <th><?= getButton($buttonArray[4]) ?></th>
        <th><?= getButton($buttonArray[5]) ?></th>
        <th><?= getButton($buttonArray[6]) ?></th>
    </tr>
</table>