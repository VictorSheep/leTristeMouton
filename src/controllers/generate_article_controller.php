<?php
function generate_article_controller(){
	$title = 'Lorem ';
	$content = 'Lorem ';

	$nb = rand(30,40);
	$words = ['Lorem ', 'ipsum ', 'dolor ', 'sit amet, ', 'consectetur ', 'adipisicing ', 'elit. ', 'Rerum ', 'ratione, ','nobis ','perspiciatis ','itaque ','cumque ','esse ','odio ','error ','fuga, ','veritatis, ','expedita ','voluptatibus ','officiis? ','Doloremque, ','necessitatibus ','consequuntur ','nihil ','exercitationem ','soluta ','assumenda ','ex? '];

	$title.= $words[array_rand($words)];

	for ($i=0; $i < $nb ; $i++) { 
		$content .= $words[array_rand($words)];
	}
	
	add_article($title,$content);
}