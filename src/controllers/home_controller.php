<?php 
	function home_controller(){
		$nb_article = 8;
		$nb_col = 4;
		$ratio = $nb_article/$nb_col;
		$list_articles = get_recent_articles($nb_article);
		/*echo'<pre>';
		print_r($list_articles);
		echo'</pre>';*/
		include '../views/home.php';
	}