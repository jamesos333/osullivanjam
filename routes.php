<?php
require_once __DIR__ . '/router.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|txt|wasm|html|pck|wasm|svg)$/', $_SERVER["REQUEST_URI"])) {
	return false;
} else {
	// basic page paths
	get('/', '/views/index.php');
	get('/about', '/views/about.php');
	get('/faq', '/views/faq.php');
	get('/movies', '/views/movies.php');
	get('/contact', '/views/babel.php');

	// experiences
	get('/experience', '/views/experience.php');
	get('/experience/damned', '/views/experience/damned/*');
	get('/experience/cyberjellies', '/views/experience/cyberjellies/index.html');

	// 404
	any('/404', '/views/404.php');
}
?>