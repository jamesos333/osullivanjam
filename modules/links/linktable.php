<?php
define('CATEGORIES', array("tech", "info", "art", "books", "mscl"));
define('LINKS_JSON', getFileJsonContent(JSON_PATH_LINKS . 'links.json'));
define('DECODER_TEMPLATE', getFileTextContent(HTML_PATH_LINKS . 'decodertemplate.html'));

function getLinks() {
    $linkArray = LINKS_JSON;
    $allLinks = "";
    if (isCategorySelected('all')) {
        shuffle($linkArray);
    }
    foreach ($linkArray as $currentLink) {
        if (isCategorySelected('all') || isCategorySelected($currentLink['category'])) {
            $allLinks .= createLinkHtml($currentLink, !isCategorySelected('all'));
        }
    }
    return $allLinks;
}

// if simplify is true, it will have the link be on its own line and with default formatting
function createLinkHtml($currentLink, $simplify) {
    $keywords = array("%TEXT%", "%URL%", "%CATEGORY%", "%STYLE%");
    $linkTemplate = "<a target='_blank' rel='noopener noreferrer' href='%URL%' class='%CATEGORY%' %STYLE%>%TEXT%</a> ";
    $style = "style='font-size:" . randomFontSize() . "'";
    if ($simplify) {
        $linkTemplate = '<div class="simplified">' . $linkTemplate . '</div>';
        $style = "";
    }
    array_push($currentLink, $style);
    return str_replace(
        $keywords,
        $currentLink,
        $linkTemplate
    );
}

function getDecoder() {
    $countedCategories = array_count_values(array_column(LINKS_JSON, 'category'));
    $allLinks = createDecoderHtml(
        'all',
        array_sum($countedCategories),
        isCategorySelected('all')
    );
    foreach (CATEGORIES as $current) {
        $allLinks .= createDecoderHtml(
            $current,
            $countedCategories[$current],
            isCategorySelected($current)
        );
    }
    return $allLinks;
}

function createDecoderHtml($category, $count, $isSelected) {
    $class = $isSelected ? 'selected ' . $category : $category;
    return str_replace(
        array('%CATEGORY%', '%COUNT%', '%CLASS%'),
        array($category, $count, $class),
        DECODER_TEMPLATE
    );
}

function isCategorySelected($category) {
    if (isset($_GET['category']) && in_array((string)$_GET['category'], CATEGORIES)) {
        return $_GET['category'] == $category;
    }
    return 'all' == $category;
}

function randomFontSize() {
    return random_int(30, 46) . "px";
}
?>

<div class="decoder">
    <?= getDecoder() ?>
</div>

<div class="link-container">
    <?= getLinks() ?>
</div>