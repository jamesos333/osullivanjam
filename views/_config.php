<?php
define('VERSION', '2');
// variables for basic paths
define('CSS_PATH', '/styles/css/');
define('JS_PATH', '/files/js/');
define('IMAGE_PATH', '/files/img/');

define('ELEMENTS_PATH', 'modules/');
define('MSCL_PATH', 'files/txt/');

define('ELEMENTS_PATH_TEMPLATES', ELEMENTS_PATH . 'template/');

// variables for page-specific paths
define('IMAGE_PATH_404', IMAGE_PATH . '404/');
define('IMAGE_PATH_INDEX', IMAGE_PATH . 'index/');
define('ELEMENTS_PATH_INDEX', ELEMENTS_PATH . 'index/');

define('IMAGE_PATH_ABOUT', IMAGE_PATH . 'about/');

define('IMAGE_PATH_FAQ', IMAGE_PATH . 'faq/');

define('IMAGE_PATH_MOVIES', IMAGE_PATH . 'movies/');
define('IMAGE_PATH_MOVIES_THUMBNAILS', IMAGE_PATH_MOVIES . 'thumbnails/');
define('ELEMENTS_PATH_MOVIES', ELEMENTS_PATH . 'movies/');

define('ELEMENTS_PATH_EXPERIENCE', ELEMENTS_PATH . 'experience/');
define('IMAGE_PATH_EXPERIENCE', IMAGE_PATH . 'experience/');
define('IMAGE_PATH_EXPERIENCE_ICONS', IMAGE_PATH_EXPERIENCE . 'icons/');

define('IMAGE_PATH_CONTACT', IMAGE_PATH . 'contact/');
define('ELEMENTS_PATH_CONTACT', ELEMENTS_PATH . 'contact/');

define('IMAGE_PATH_BUTTONS', IMAGE_PATH_INDEX . 'buttons/');
define('IMAGE_PATH_LETTERS', IMAGE_PATH . 'letters/');
define('IMAGE_PATH_NAVBAR', IMAGE_PATH . 'navbar/');

// some basic functions
function getFileTextContent($path) {
    $file = fopen($path, "r") or die("Unable to open file!");
    $text = fread($file, filesize($path));
    fclose($file);
    return $text;
}

// will return true if the users device is a phone
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>