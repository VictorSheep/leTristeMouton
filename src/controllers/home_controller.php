<?php 
	function home_controller(){
		$list_news = get_all_articles();
		/*echo'<pre>';
		print_r($list_news);
		echo'</pre>';*/
		include '../views/home.php';
	}