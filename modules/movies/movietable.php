<?php
    $extermination = 
        array("https://youtu.be/ECw6xpbpOGo", "extermination.png"    , "Extermination Of Scum"       , "September 27th, 2019");
    $movieArray = array(
        array("https://youtu.be/E4MDp3CAsGg", "dickkick.png"         , "Busted Nut"                  , "May 21th, 2018"),
        array("https://youtu.be/eTm8VaEy1XY", "execution3thumb.png"  , "Execution of Scum 3"         , "April 28th, 2017"),
        array("https://youtu.be/V7FN3v9Wv3E", "mealwormthumb2.png"   , "Meal Worm"                   , "March 28th, 2017"),
        array("https://youtu.be/fCx0GYBhBvY", "timethumb1.png"       , "A Misuse of Time"            , "February 28th, 2017"),
        array("https://youtu.be/7io6KVqbNik", "yuletidethumb.png"    , "Yuletide Homicide"           , "December 20th, 2016"),
        array("https://youtu.be/5iRrXbnp23U", "turkeymanthumb.png"   , "The Case of the Turkey Man"  , "November 23rd, 2016"),
        array("https://youtu.be/X-5GqTDSYx0", "pumpkinthumb.png"     , "Execution of the Pumpkin King", "October 28th, 2016"),
        array("https://youtu.be/DjQV0tROkzA", "starmen1thumb.png"    , "Voyage of the Starmen"       , "June 27th, 2016"),
        array("https://youtu.be/EqBmZRV_Sr0", "coffeethumb.png"      , "Mental Improvement"          , "May 17th, 2016"),
        array("https://youtu.be/06wqBLhYPHo", "monopolythumb.png"    , "Monopoly Time"               , "April 19th, 2016"),
        array("https://youtu.be/enw6A8x1fE4", "execution2thumb.png"  , "Execution of Scum 2: filth"  , "March 15th, 2016"),
        array("https://youtu.be/uiZdAh9IccM", "philthumb.png"        , "The Case of Phil the Food Reviewer", "January 21st, 2016"),
        array("https://youtu.be/TSGEh5fD_1k", "christmasthumb.png"   , "Holiday Holocaust"           , "December 17th, 2015"),
        array("https://youtu.be/5YW5Aic0xiY", "powerpuffthumb.png"   , "Powerpuff Girls Full House Hooker Party", "November 15th, 2015"),
        array("https://youtu.be/mhJpw_W6ANA", "executionthumb.png"   , "Execution of Scum"           , "October 31st, 2015"),
        array("?secret=1"  , "scrt.png", "", "")
    );
    $secretMovieArray = array(
        array("https://youtu.be/s1H1KKFYwsU", "porky.jpg"         , "Porky McGorkis vs the Wild"                  , "July 30th, 2016"),
        array("https://youtu.be/JIYV_arFc5U", "hell.jpg"          , "Hell"                                        , "June 28th, 2016")
    );

    function getReleaseDateText($releaseDate){
        if(!empty($releaseDate)){
            return "official upload date ($releaseDate)";
        }
    }

    function getMovieElement($element){
        $link = $element[0];
        $imgLink  = IMAGE_PATH_MOVIES_THUMBNAILS . $element[1];
        $title = $element[2];
        $releaseDateText = getReleaseDateText($element[3]);

        $imgSection = "<img class='fixedresize' src='$imgLink' alt='movie thumb'>";
        $descriptionSection = "<div class='movieTitle'>$title</div><div class='movieSubtitle'>$releaseDateText</div>";
        $body = "<a href='$link'>$imgSection $descriptionSection</a>";

        if(!empty($title)){
            $body = "<div class='movieElement'>$body</div>";
        }
        return "<th>$body</th>";
    }

    function populateAndCreateMovieTable($elements){
        $tableString = "<table class='movieTable' style='width:100%'>";
        for($x = 0; $x < count($elements); $x++){
            $tableString .= "<tr>" . getMovieElement($elements[$x]);
            if($x != count($elements)-1) {
                $x++;
                $tableString .= getMovieElement($elements[$x]);
            }
            $tableString .= "</tr>";
        }
        return "$tableString </table>";
    }

    function getMovieTable(){
        if(isset($_GET['secret'])) {
            global $secretMovieArray;
            $secretBanner = "<p class='title'>Secret Videos</p>";
            return $secretBanner . populateAndCreateMovieTable($secretMovieArray);
        }
        global $movieArray;
        global $extermination;
        return populateAndCreateMovieTable(array($extermination)) . populateAndCreateMovieTable($movieArray);
    }
?>
