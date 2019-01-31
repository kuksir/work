<?
	$id = $_POST['id']; //принимаем id строки из ajax запроса, делаем запрос к базе данных на вывод строки, передаем данные json строкой в JavaScript
	require_once('class.php');
	$obj = new book();
	$obj->get_line($id);
	$query = json_encode($obj->data);
	echo $query;
?>