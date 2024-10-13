<?php

function getFileTextContent($path) {
    return file_get_contents($path);
}

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

// this implementation is crude but it works for now
function redirectTo404() {
    echo "<meta http-equiv='refresh' content='0;url=/404'>";
    die();
}