<?php
    $githubLink = "https://github.com/jamesos333/osullivanjam";
    $aboutButton =  array("about"   , "button_about.png", "about"   , "button");
    $faqButton =    array("faq"     , "button_faq.png"  , "faq"     , "button");
    $buttonArray = array(
        array("contact"     , "button_contact.png"      , "contact"     , "button"),
        array("cooking"     , "button_cooking.png"      , "cooking"     , "button comingsoon"),
        array("music"       , "button_music.png"        , "music"       , "button comingsoon"),
        array("movies"      , "button_movies.png"       , "movies"      , "button"),
        array("experience"  , "button_experience.png"   , "experience"  , "button comingsoon"),
        array($githubLink   , "button_github.png"       , "github"      , "button")
    );
    shuffle($buttonArray);

    function getButton($buttonParameters){
        $linkHref = $buttonParameters[0];
        $imgSrc = IMAGE_PATH_BUTTONS . $buttonParameters[1];
        $imgAlt = $buttonParameters[2];
        $imgClass = $buttonParameters[3];
        echo "<a href='$linkHref'><img src='$imgSrc' alt='$imgAlt' class='$imgClass'></a>";
    }
?>

<table class="buttontable">
    <tr>
        <th><?php getButton($aboutButton)?></th>
        <th><?php getButton($buttonArray[0])?></th>
        <th><?php getButton($buttonArray[1])?></th>
    </tr>
    <tr>
        <th><?php getButton($buttonArray[2])?></th>
        <th><img src= "<?php echo IMAGE_PATH_INDEX . 'eye.gif';?>" alt="eye" style="width: 84%; padding: 0.5em 0px"></th>
        <th><?php getButton($buttonArray[3])?></th>
    </tr>
    <tr>
        <th><?php getButton($buttonArray[4])?></th>
        <th><?php getButton($buttonArray[5])?></th>
        <th><?php getButton($faqButton)?></th>
    </tr>
</table>