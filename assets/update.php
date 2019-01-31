<?
$id = $_POST['id']; //принимаем переменные из ajax запроса
$genre = $_POST['genre'];
$autor = $_POST['autor'];
$name = $_POST['name'];
$year = $_POST['year'];
if (isset($genre) && isset($autor) && isset($name) && isset($year)) { //если переменные существуют...
	if (!empty($genre) && !empty($autor) && !empty($name) && !empty($year)) { //если переменные не пустые происходит экранизация html символов
		$genre = htmlspecialchars($genre);
		$autor = htmlspecialchars($autor);
		$name = htmlspecialchars($name);
		$year = htmlspecialchars($year);
		require_once(dirname(__FILE__).'/class.php'); // подключаемся к классу работы с БД
		$obj = new book(); 
		$obj->update_row($id,$genre,$autor,$name,$year);// вызываем функцию для изменения строки в БД
		$query = $obj->data;
	}
}

?>