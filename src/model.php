<?php
function get_pdo(){
	$pdo = new PDO("mysql:host=".getEnv('DB_HOST').";dbname=".getEnv('DB_NAME'), getEnv('DB_USERNAME'), getEnv('DB_PASSWORD'),[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
	return $pdo;
}
function get_all_articles(){
	$pdo = get_pdo();

    $prepare = $pdo->prepare("SELECT * FROM articles");
    $prepare->execute();

	$data = $prepare->fetchAll(PDO::FETCH_ASSOC);
	$pdo = NULL;

	return $data;
}
function get_single_articles($id){
    $pdo = get_pdo();

    $prepare = $pdo->prepare("SELECT * FROM articles WHERE id=?");
    $prepare->bindValue(1,$id,PDO::PARAM_INT);
    $prepare->execute();

	$data = $prepare->fetch(PDO::FETCH_ASSOC);
	$pdo = NULL;

	return $data;
}

function add_article($title,$content){
	$date= date("Y-m-d H:i:s",time());
	$pdo = get_pdo();

	$prepare = $pdo->prepare("INSERT INTO articles (title,content,date) VALUES (?,?,?);");
	$prepare->bindValue(1,$title,PDO::PARAM_STR);
	$prepare->bindValue(2,$content,PDO::PARAM_STR);
	$prepare->bindValue(3,$date,PDO::PARAM_STR);
	$prepare->execute();

	$data = $prepare->fetchAll(PDO::FETCH_ASSOC);
	$pdo = NULL;
}