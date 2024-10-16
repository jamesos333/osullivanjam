<?php
require_once __DIR__ . '/router.php';
// basic page paths
get('/', '/views/index.php');
get('/about', '/views/about.php');
get('/faq', '/views/faq.php');
get('/movies', '/views/movies.php');
get('/contact', '/views/babel.php');
get('/links', '/views/links.php');
get('/experience', '/views/experience.php');

get('/cooking', '/views/cooking/cooking-list.php');
get('/cooking/recipe/$id', '/views/cooking/cooking-display.php');

get('/loading', '/views/loading.php');
get('/moth', '/views/moth.php');

// babel chatbox
get('/contact/chatbox', '/modules/contact/chatbox.php');

// links section
get('/links/filter', '/modules/links/linktable.php');

// 404
any('/404', '/views/404.php');
