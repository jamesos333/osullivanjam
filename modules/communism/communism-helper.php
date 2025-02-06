<?php
function createLinksList() {
    $links_json = getFileJsonContent(JSON_PATH_COMMUNISM . 'communism-links.json');
    $element_html = "";
    foreach ($links_json as $link) {
        $element_html .= createLinkElement($link["title"], $link["description"], $link["link"]);
    }
    return $element_html;
}

function createLinkElement($title, $description, $link) {
    return <<<HTML
        <div class="link">
            <div class="link-title">
                <a target='_blank' rel='noopener noreferrer' href='$link'>$title</a>
            </div>
            <div class="link-description">$description</div>
        </div>
    HTML;
}
