<?php
    function getLinks() {
        $linkArray = getAndDecodeLinksJson();
        shuffle($linkArray);
        $allLinks = "";
        foreach ($linkArray as $currentLink) {
            $allLinks .= createLinkHtml($currentLink);
        }
        return $allLinks;
    }

    function createLinkHtml($currentLink) {
        $keywords = array("%TEXT%", "%URL%", "%CATEGORY%", "%SIZE%");
        $linkTemplate = "<a href='%URL%' class='%CATEGORY%' style='font-size:%SIZE%'>%TEXT%</a>";
        array_push($currentLink, randomFontSize());
        return str_replace(
            $keywords, 
            $currentLink, 
            $linkTemplate
        );
    }

    function getDecoder() {
        $categories = array("tech", "info", "art", "books", "mscl");
        $countedCategories = array_count_values(array_column(getAndDecodeLinksJson(), 'category'));
        $allLinks = createDecoderHtml('all', array_sum($countedCategories));
        foreach ($categories as $current) {
            $allLinks .= createDecoderHtml($current, $countedCategories[$current]);
        }
        return $allLinks;
    }

    function createDecoderHtml($category, $count) {
        $template = "<div class='decoder-element %CATEGORY%'>%CATEGORY% (%COUNT%)</div>";
        return str_replace(
            array('%CATEGORY%', '%COUNT%'), 
            array($category, $count), 
            $template
        );
    }

    function getAndDecodeLinksJson(){
        $json = getFileTextContent(JSON_PATH_LINKS . 'links.json');
        return json_decode($json, true);
    }

    function randomFontSize() {
        return random_int(30, 40) . "px";
    }
?>

<div class="decoder">
    <?=getDecoder()?>
</div>

<div class="linkContainer">
    <?=getLinks()?>
</div>