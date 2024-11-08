<?php
require_once __DIR__ . '/router.php';
get('/', '/views/index.php');
get('/about', '/views/about.php');
get('/faq', '/views/faq.php');
get('/movies', '/views/movies.php');
get('/contact', '/views/babel.php');
get('/links', '/views/links.php');
get('/projects', '/views/projects/projects-list.php');

get('/cooking', '/views/cooking/cooking-list.php');
get('/cooking/recipe/$id', '/views/cooking/cooking-display.php');

get('/loading', '/views/loading.php');
get('/moth', '/views/moth.php');

get('/contact/chatbox', '/modules/contact/chatbox.php');

get('/links/filter', '/modules/links/linktable.php');

any('/404', '/views/404.php');
