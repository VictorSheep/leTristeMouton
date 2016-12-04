<?php 
	function home_action(){
		$list_news = get_all_news();
		echo'<pre>';
		print_r($list_news);
		echo'</pre>';
		include '../views/home.php' ;
	}