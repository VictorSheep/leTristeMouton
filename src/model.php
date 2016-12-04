<?php
function get_pdo(){
	$pdo = new PDO("mysql:host=".getEnv('DB_HOST').";dbname=".getEnv('DB_NAME'), getEnv('DB_USERNAME'), getEnv('DB_PASSWORD'),[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
	return $pdo;
}
function get_all_news(){
	$pdo = get_pdo();

    $prepare = $pdo->prepare("SELECT * FROM news");
    $prepare->execute();

	$data = $prepare->fetchAll(PDO::FETCH_ASSOC);
	$pdo = NULL;

	return $data;
}
function get_single_news($id){
    $pdo = get_pdo();

    $prepare = $pdo->prepare("SELECT * FROM news WHERE id=?");
    $prepare->bindValue(1,$id,PDO::PARAM_INT);
    $prepare->execute();

	$data = $prepare->fetch(PDO::FETCH_ASSOC);
	$pdo = NULL;

	return $data;
}