<?php
    function getLinks() {
        // keywords denotes the structure of the array in reference to the template
        $keywords = array("%TEXT%", "%URL%", "%CATEGORY%", "%SIZE%");
        $linkTemplate = "<a href='%URL%' class='%CATEGORY%' style='font-size:%SIZE%'>%TEXT%</a>";
        $linkArray = getAndDecodeJson();
        shuffle($linkArray);
        return generateLinkTable($linkTemplate, $keywords, $linkArray); 
    }

    function generateLinkTable($linkTemplate, $keywords, $linkArray) {
        $allLinks = "";
        foreach ($linkArray as $currentLink) {
            array_push($currentLink, randomFontSize());
            $allLinks .= str_replace($keywords, $currentLink, $linkTemplate);
        }
        return $allLinks;
    }

    function getAndDecodeJson(){
        $json = getFileTextContent(JSON_PATH_LINKS . 'links.json');
        return json_decode($json, true);
    }

    function randomFontSize() {
        return random_int(30, 40) . "px";
    }
?>

<div class="linkContainer">
    <?= getLinks()?>
</div>