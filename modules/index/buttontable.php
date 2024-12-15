<?php
$githubLink = "https://github.com/jamesos333/osullivanjam";
$aboutButton = array("about", "button_about.png", "about", "button");
$buttonArray = array(
    array("contact"     , "button_contact.png"      , "contact"     , "button"),
    array("cooking"     , "button_cooking.png"      , "cooking"     , "button"),
    array("links"       , "button_links.png"        , "links"       , "button"),
    array("movies"      , "button_movies.png"       , "movies"      , "button"),
    array("projects"    , "button_projects.png"     , "projects"    , "button"),
    array($githubLink   , "button_github.png"       , "github"      , "button"),
    array("faq"         , "button_faq.png"          , "faq"         , "button")
);
shuffle($buttonArray);

function getButton($buttonParameters) {
    $linkHref = $buttonParameters[0];
    $imgSrc = IMAGE_PATH_BUTTONS . $buttonParameters[1];
    $imgAlt = $buttonParameters[2];
    $imgClass = $buttonParameters[3];
    return "<a href='$linkHref'><img src='$imgSrc' width='300px' height='120px' alt='$imgAlt' class='$imgClass'></a>";
}
?>

<table preload="mousedown" preload-images="true" class="buttontable">
    <tr>
        <th><?= getButton($aboutButton) ?></th>
        <th><?= getButton($buttonArray[0]) ?></th>
        <th><?= getButton($buttonArray[1]) ?></th>
    </tr>
    <tr>
        <th><?= getButton($buttonArray[2]) ?></th>
        <th><a href='/moth'><img src="<?= IMAGE_PATH_INDEX . 'eye.gif' ?>" width="300px" height="276px" alt="eye" class="eye"></a></th>
        <th><?= getButton($buttonArray[3]) ?></th>
    </tr>
    <tr>
        <th><?= getButton($buttonArray[4]) ?></th>
        <th><?= getButton($buttonArray[5]) ?></th>
        <th><?= getButton($buttonArray[6]) ?></th>
    </tr>
</table>