<?php //session_start();

/* ********************************************* *\
	     	        FrontController
\* ********************************************* */

require_once __DIR__.'/../app.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//$prefix = '/' . getEnv('URL_PREFIX');

switch ($uri) {
	case '/':
		home_controller();
		break;
	case ('/articles'):
		articles_controller();
		break;
	case ('/generatearticle'):
		generate_article_controller();
		break;
	case ('/recent_articles'):
		get_six_articles();

	default:
		header('HTTP/1.1 404 Not Found');
		echo '<html><body><h1>Page Not Found</h1></body></html>';
		break;
}
