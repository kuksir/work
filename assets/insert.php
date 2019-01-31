<?php
$genre = $_POST['genre']; //передаем переменные из ajax запроса
$autor = $_POST['autor'];
$name = $_POST['name'];
$year = $_POST['year'];
if (isset($genre) && isset($autor) && isset($name) && isset($year)) { //если переменные существуют...
	if (!empty($genre) && !empty($autor) && !empty($name) && !empty($year)) { //если переменные не пустые производим экранизацию html символов
		$genre = htmlspecialchars($genre);
		$autor = htmlspecialchars($autor);
		$name = htmlspecialchars($name);
		$year = htmlspecialchars($year);
		require_once(dirname(__FILE__).'/class.php');
		$obj = new book();
		$obj->add_book($genre,$autor,$name,$year);
		$query = $obj->data;
	}
}
?>