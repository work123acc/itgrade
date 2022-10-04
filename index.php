<?
	session_start();
	//ini_set('display_errors', 1);
	ini_set('display_errors', 0);
	//error_reporting(E_ALL);
	//error_reporting(E_ERROR);
	
	require_once './inc/router.php';
	$router = new Router();
	$router->run();

?>
