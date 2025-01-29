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
        <a target='_blank' rel='noopener noreferrer' href='$link'>
            <div class="link">
                <div class="link-title">$title</div>
                <div class="link-description">[WEB] $description</div>
            </div>
        </a>
    HTML;
}
