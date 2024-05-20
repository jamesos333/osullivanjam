<?php
    function getLinkTable(){
        // the last element specifies if it is available for mobile or not
        $experienceArray = array(
            array("/experience/damned/damned.html",      "damned.png",       "Savior of the Damned", "godot",   false),
            array("/experience/cyberjellies/index.html", "cyberjellies.png", "Cyberjellies",         "p5js",    true)
        );
        return populateAndCreateLinkTable($experienceArray);
    }

    function getLinkElement($element){
        if ( isMobile() && !$element[4] ) {
            return;
        }
        
        $imgLink  = IMAGE_PATH_EXPERIENCE . $element[1];
        $iconPath = IMAGE_PATH_EXPERIENCE_ICONS . $element[3] . '.svg';

        $sectionThumb = "<div class='imageThumb'><img src='$imgLink' alt='$element[2] thumbnail'></div>";
        $sectionTitle = "<div class='elementTitle'>$element[2]</div>";
        $sectionIcons = "<div class='elementIcons'><img src='$iconPath' alt='$element[3] logo'/></div>";

        $body = $sectionThumb . $sectionTitle . $sectionIcons;
        $body = "<div class='linkElement'><a href='$element[0]'>$body</a></div>";

        return "<th>$body</th>";
    }

    function populateAndCreateLinkTable($elements){
        $tableString = "<table class='linkTable' style='width:100%'>";
        for($x = 0; $x < count($elements); $x++){
            $tableString .= "<tr>" . getLinkElement($elements[$x]);
            if($x != count($elements)-1) {
                $x++;
                $tableString .= getLinkElement($elements[$x]);
            }
            $tableString .= "</tr>";
        }
        return "$tableString </table>";
    }
?>
