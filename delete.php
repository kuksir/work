<?
$id = $_POST['id'];
require_once(dirname(__FILE__).'/class.php');
$obj = new book();
$obj->delete_row($id);
$query = $obj->data;
?>