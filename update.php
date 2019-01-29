<?
$id = $_POST['id'];
$genre = $_POST['genre'];
$autor = $_POST['autor'];
$name = $_POST['name'];
$year = $_POST['year'];

require_once(dirname(__FILE__).'/class.php');
$obj = new book();
$obj->update_row($id,$genre,$autor,$name,$year);
$query = $obj->data;
?>