<!DOCTYPE html>
<html>
<head>
<title>katalog</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<?

require_once(dirname(__FILE__).'/class.php');
$obj = new book();
    $obj->get_data ();
    $query = $obj->data;
    ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
	<table class="table table-hover table-inverse" id="myTable">
    <thead>
    <tr>
        <th>№</th>
        <th>Жанр</th>
        <th>Автор</th>
        <th>Название</th>
        <th>Год выпуска</th>
        <th>Изменить</th>
        <th>Удалить</th>
    </tr>
    </thead>
    <tbody id="tbody">
    <? foreach ($query as $item) {?>
        <tr>
            <th scope="row"><?=$item['id_book']?></th>
            <td><?=$item['genre']?></td>
            <td><?=$item['autor']?></td>
            <td><?=$item['name']?></td>
            <td><?=$item['year']?></td>
            <td><button type="submit" class="update" value="<?=$item['id_book']?>" onclick = "updateData(this.value)">Изменить</button></td>
            <td><button type="submit" class="delete" value="<?=$item['id_book']?>" onclick="deleteData(this.value)">Удалить</button></td>
        </tr>
    <?}?>

    </tbody>
</table>
		</div>
		<div class="col-md-4">
		<h4>Жанр:</h4>
		<input type="text" name="genre" id="genre" required="">
		<h4>Автор:</h4>
		<input type="text" name="autor" id="autor" required="">
		<h4>Название:</h4>
		<input type="text" name="name" id="name" required="">
		<h4>Год выпуска</h4>
		<input type="number" name="year" id="year" required="">
		<input type="submit" name="create" id="create" onclick="insert()" value="Добавить запись">
		</div>
		</div>
	</div>
        <div class="col-md-4" id="updateForm" style="visibility: hidden;">
            <h2>Введите новые данные</h2>
            <h4>Жанр:</h4>
            <input type="text" id="upGenre" required="">
            <h4>Автор</h4>
            <input type="text" id="upAutor" required="">
            <h4>Название</h4>
            <input type="text" id="upName" required="">
            <h4>Год выпуска:</h4>
            <input type="number" id="upYear" required="">
            <button type="submit" id="updateSubmit" onclick="updateDB(this.value)">Сохранить</button>
    </div>

    <div id="msg"></div>
</body>


</html>