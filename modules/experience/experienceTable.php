<?php
    function getLinkTable(){
        $experienceArray = array(
            array("experience/damned/damned.html",      "damned.png",       "Savior of the Damned", "godot"),
            array("experience/cyberjellies/index.html", "cyberjellies.png", "Cyberjellies",         "p5js")
        );
        return populateAndCreateLinkTable($experienceArray);
    }

    function getLinkElement($element){
        $link = $element[0];
        $imgLink  = IMAGE_PATH_EXPERIENCE . $element[1];
        $iconPath = IMAGE_PATH_EXPERIENCE_ICONS . $element[3] . '.svg';

        $sectionThumb = "<div class='imageThumb'><img src='$imgLink' alt='program thumb'></div>";
        $sectionTitle = "<div class='bottom-left'>$element[2]</div>";
        $sectionIcons = "<div class='top-right'><img src='$iconPath' alt='icon logo'/></div>";
        
        $body = $sectionThumb . $sectionTitle . $sectionIcons;
        $body = "<div class='linkElement'><a href='$link'>$body</a></div>";

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
