<?php
define('ALL', 'all');
define('CATEGORIES', array("tech", "info", "art", "books", "mscl"));
define('LINKS_JSON', getFileJsonContent(JSON_PATH_LINKS . 'links.json'));
define('DECODER_TEMPLATE', getFileTextContent(HTML_PATH_LINKS . 'decodertemplate.html'));

function getLinks() {
    $link_array = array_reverse(LINKS_JSON);
    if (isCategorySelected(ALL)) {
        shuffle($link_array);
    } else {
        $link_array = array_filter(
            $link_array,
            fn($k) => isCategorySelected($k["category"])
        );
    }
    $element_html = "";
    foreach ($link_array as $current_link) {
        $element_html .= createLinkHtml($current_link, !isCategorySelected(ALL));
    }
    return $element_html;
}

function createLinkHtml($current_link, $simplify) {
    $link_template = "<a target='_blank' rel='noopener noreferrer' href='%URL%' class='%CATEGORY%' %STYLE%>%TEXT%</a> ";
    $style = "style='font-size:" . random_int(30, 46) . "px'";
    if ($simplify) {
        $link_template = "<div class='simplified'>" . $link_template . "</div>";
        $style = "";
    }
    return str_replace(
        array("%TEXT%", "%URL%", "%CATEGORY%", "%STYLE%"),
        array(
            $current_link["title"],
            $current_link["url"],
            $current_link["category"],
            $style
        ),
        $link_template
    );
}

function getDecoder() {
    $counted_categories = array_count_values(array_column(LINKS_JSON, 'category'));
    $element_html = createDecoderHtml(
        ALL,
        array_sum($counted_categories),
        isCategorySelected(ALL)
    );
    foreach (CATEGORIES as $current) {
        $element_html .= createDecoderHtml(
            $current,
            $counted_categories[$current],
            isCategorySelected($current)
        );
    }
    return $element_html;
}

function createDecoderHtml($category, $count, $is_selected) {
    return str_replace(
        array('%CATEGORY%', '%COUNT%', '%CLASS%'),
        array(
            $category,
            $count,
            $is_selected ? 'selected ' . $category : $category
        ),
        DECODER_TEMPLATE
    );
}

function isCategorySelected($category) {
    return getSelectedCategory() == $category;
}

function getSelectedCategory() {
    if (isset($_GET['category']) && in_array((string)$_GET['category'], CATEGORIES)) {
        return $_GET['category'];
    }
    return ALL;
}
?>

<div class="decoder">
    <?= getDecoder() ?>
</div>

<div class="link-container">
    <?= getLinks() ?>
</div>