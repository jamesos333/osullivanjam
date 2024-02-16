<?php
$pageName = '';
// variables for basic paths
define('CSS_PATH', 'styles/');
define('JS_PATH', 'js/');
define('IMAGE_PATH', 'img/');
define('ELEMENTS_PATH', 'elements/');
define('MSCL_PATH', 'mscl/');

// variables for page-specific paths
define('IMAGE_PATH_INDEX', IMAGE_PATH . 'index/');
define('ELEMENTS_PATH_INDEX', ELEMENTS_PATH . 'index/');

define('IMAGE_PATH_ABOUT', IMAGE_PATH . 'about/');

define('IMAGE_PATH_CONTACT', IMAGE_PATH . 'contact/');

define('IMAGE_PATH_BUTTONS', IMAGE_PATH_INDEX . 'buttons/');
define('IMAGE_PATH_LETTERS', IMAGE_PATH . 'letters/');
define('IMAGE_PATH_NAVBAR', IMAGE_PATH . 'navbar/');

// some basic functions
function getText($path) {
    $file = fopen($path, "r") or die("Unable to open file!");
    $text = fread($file, filesize($path));
    fclose($file);
    return $text;
}
?>