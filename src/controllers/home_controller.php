<?php 
	function home_controller(){
		$list_articles = get_recent_articles(3);
		/*echo'<pre>';
		print_r($list_articles);
		echo'</pre>';*/
		include '../views/home.php';
	}