<?
require_once('class.php');
$id = $_POST['deleteID'];// принимаем id удаляемой строки
$obj = new book();
$obj->delete_row($id);// вызываем функцию удаления строки из класса работы с БД
$query = $obj->data;
?>