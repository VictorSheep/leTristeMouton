<?php //session_start();

/* ********************************************* *\
	     	        FrontController
\* ********************************************* */

require_once __DIR__.'/../app.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$prefix = '/' . getEnv('URL_PREFIX');
$user_id = null;

switch ($uri) {
	case '/':
		home_action();
		break;
	case ($prefix.'/articles'):
		articles_action();
		break;
	
	default:
		header('HTTP/1.1 404 Not Found');
		echo '<html><body><h1>Page Not Found</h1></body></html>';
		break;
}