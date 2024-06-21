<?php
require_once __DIR__ . '/router.php';
	// basic page paths
	get('/', '/views/index.php');
	get('/about', '/views/about.php');
	get('/faq', '/views/faq.php');
	get('/movies', '/views/movies.php');
	get('/contact', '/views/babel.php');

	// babel chatbox
	get('/contact/chatbox', '/modules/contact/chatbox.php');

	// experiences
	get('/experience', '/views/experience.php');

	// loading 
	get('/loading', '/views/loading.php');

	// 404
	any('/404', '/views/404.php');
?>