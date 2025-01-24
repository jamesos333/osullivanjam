<?php
require_once __DIR__ . '/router.php';
get('/', '/views/index.php');
get('/faq', '/views/faq.php');
get('/movies', '/views/movies.php');
get('/loading', '/views/loading.php');
get('/moth', '/views/moth.php');

get('/about', '/views/about.php');
get('/about/v/$id', '/views/about.php');

get('/contact', '/views/babel.php');
get('/contact/chatbox', '/modules/contact/chatbox.php');

get('/links', '/views/links.php');
get('/links/filter', '/modules/links/linktable.php');

get('/cooking', '/views/cooking/cooking-list.php');
get('/cooking/recipe/$id', '/views/cooking/cooking-display.php');

get('/projects', '/views/projects/projects-list.php');

get('/communism', '/views/communism.php');

any('/404', '/views/404.php');