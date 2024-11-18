<?php
define('VERSION', '6.9');
// variables for basic paths
define('IMAGE_PATH', '/files/img/');
define('CSS_PATH', '/styles/css/');
define('ELEMENTS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/modules/');
define('TXT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/files/txt/');
define('HTML_PATH', $_SERVER['DOCUMENT_ROOT'] . '/files/html/');
define('JSON_PATH', $_SERVER['DOCUMENT_ROOT'] . '/files/json/');

// variables for page-specific paths
define('IMAGE_PATH_GLOBAL', IMAGE_PATH . 'global/');
define('IMAGE_PATH_404', IMAGE_PATH . '404/');
define('IMAGE_PATH_MOTH', IMAGE_PATH . 'moth/');
define('IMAGE_PATH_INDEX', IMAGE_PATH . 'index/');
define('IMAGE_PATH_ABOUT', IMAGE_PATH . 'about/');
define('IMAGE_PATH_FAQ', IMAGE_PATH . 'faq/');
define('IMAGE_PATH_CONTACT', IMAGE_PATH . 'contact/');
define('IMAGE_PATH_LOADING', IMAGE_PATH . 'loading/');
define('IMAGE_PATH_LINKS', IMAGE_PATH . 'links/');
define('IMAGE_PATH_COOKING', IMAGE_PATH . 'cooking/');

define('IMAGE_PATH_LETTERS', IMAGE_PATH_GLOBAL . 'letters/');
define('IMAGE_PATH_NAVBAR', IMAGE_PATH_GLOBAL . 'navbar/');

define('IMAGE_PATH_MOVIES', IMAGE_PATH . 'movies/');
define('IMAGE_PATH_MOVIES_THUMBNAILS', IMAGE_PATH_MOVIES . 'thumbnails/');

define('IMAGE_PATH_PROJECTS', IMAGE_PATH . 'projects/');
define('IMAGE_PATH_PROJECTS_ICONS', IMAGE_PATH_PROJECTS . 'icons/');

define('IMAGE_PATH_BUTTONS', IMAGE_PATH_INDEX . 'buttons/');
define('IMAGE_PATH_INDEX_DAILY', IMAGE_PATH_INDEX . 'imageoftheday/');

define('ELEMENTS_PATH_TEMPLATES', ELEMENTS_PATH . 'template/');
define('ELEMENTS_PATH_TEMPLATES_TOP', ELEMENTS_PATH_TEMPLATES . 'top.php');
define('ELEMENTS_PATH_TEMPLATES_BOTTOM', ELEMENTS_PATH_TEMPLATES . 'bottom.php');

define('ELEMENTS_PATH_INDEX', ELEMENTS_PATH . 'index/');
define('ELEMENTS_PATH_ABOUT', ELEMENTS_PATH . 'about/');
define('ELEMENTS_PATH_MOVIES', ELEMENTS_PATH . 'movies/');
define('ELEMENTS_PATH_PROJECTS', ELEMENTS_PATH . 'projects/');
define('ELEMENTS_PATH_CONTACT', ELEMENTS_PATH . 'contact/');
define('ELEMENTS_PATH_LINKS', ELEMENTS_PATH . 'links/');
define('ELEMENTS_PATH_COOKING', ELEMENTS_PATH . 'cooking/');

define('HTML_PATH_INDEX', HTML_PATH . 'index/');
define('HTML_PATH_ABOUT', HTML_PATH . 'about/');
define('HTML_PATH_LINKS', HTML_PATH . 'links/');
define('HTML_PATH_PROJECTS', HTML_PATH . 'projects/');
define('HTML_PATH_COOKING', HTML_PATH . 'cooking/');

define('JSON_PATH_LINKS', JSON_PATH . 'links/');
define('JSON_PATH_ABOUT', JSON_PATH . 'about/');
define('JSON_PATH_PROJECTS', JSON_PATH . 'projects/');
define('JSON_PATH_COOKING', JSON_PATH . 'cooking/');
define('JSON_PATH_COOKING_RECIPES', JSON_PATH_COOKING . 'recipes/');

define('WORDLIST_PATH_CONTACT', TXT_PATH . 'wordlists/');
