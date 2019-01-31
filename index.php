<!DOCTYPE html>
<html>
<head>
	<title>SwanSoft</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!--Подключаем JQuery-->
	<script type="text/javascript" src="script.js"></script> <!--Подключаем скрипт для обработки ввода -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> <!--Подключаем bootstrap-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- подключаем свой css файл для нумерации строк в таблице и добавления дополнительных стилей, если требуется -->
	<?
		require_once('assets/class.php'); // подключаем класс работы с базой данных, вызываем оттуда функцию выбора всех данных из таблицы
		$obj = new book();
		$obj->get_data();
		$query = $obj->data;
	?>
</head>
<body>
	<div class="container-fluid"> <!--Блок с таблицей с книгами, под таблицей кнопка добавления новой записи-->
		<table class="table table-bordered" id="myTable">
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
			<tbody>  <!--в файле style.css задается нумерация для строк таблицы-->
				<? foreach ($query as $item) {//циклом выводятся строки из базы данных в таблицу html?>
				<tr>
					<th></th>
					<td><?=$item['genre']?></td>
					<td><?=$item['autor']?></td>
					<td><?=$item['name']?></td>
					<td><?=$item['year']?></td>
					<td><button type="button" class="btn btn-info" value="<?=$item['id_book']?>" onclick = "updateData(this.value)">Изменить</button></td>
					<td><button type="button" class="btn btn-danger" value="<?=$item['id_book']?>" onclick = "deleteData(this.value)">Удалить</button></td>
				</tr>
				<?}?>
			</tbody>
		</table>
		<button type="button" class="btn btn-primary" style="margin-bottom: 20px" onclick="insertData()">Добавить книгу</button>
	</div>
	<div class="container-fluid"> 
		<div class="row"> <!--блок с формой для создания новой записи-->
			<div class="col-md-4" id="insertDiv" style="visibility: hidden;"> <!--блок с формой для добавления записи-->
				<h2>Введите данные о книге</h2>
				<form id="insertForm" class="form-group" method="post">
					<h4>Жанр:</h4>
					<input type="text" name="insertGenre" required="" class="form-control" id="insertGenre">
					<h4>Автор:</h4>
					<input type="text" name="insertAutor" required="" class="form-control" id="insertAutor">
					<h4>Название:</h4>
					<input type="text" name="insertName" required="" class="form-control" id="insertName">
					<h4>Год выпуска:</h4>
					<input type="number" name="insertYear" required="" class="form-control " id="insertYear" style="margin-bottom: 15px;"><br>
					<button type="button" onclick="insertCancel()" class="btn btn-danger">Отмена</button>
					<input type="submit" class="btn btn-success" value="Создать" name="insert" onclick="insertSubmit();">
				</form>
			</div>
			<div class="col-md-6" id="updateDiv" style="visibility: hidden;"> <!--блок с формой для изменения данных-->
				<h2>Введите данные для изменения</h2>
					<h4>Жанр:</h4>
					<input type="text" class="form-control" id="updateGenre">
					<h4>Автор:</h4>
					<input type="text" id="updateAutor" class="form-control">
					<h4>Название:</h4>
					<input type="text" id="updateName" class="form-control">
					<h4>Год выпуска:</h4>
					<input type="number" id="updateYear" class="form-control" style="margin-bottom: 15px">
					<button type="button" onclick="updateCancel()" class="btn btn-danger">Отмена</button>
					<button type="submit" id="updateSubmit" class="btn btn-success"  onclick="updateSubmit(this.value);">Изменить</button>
			</div>
		</div>
	</div>
</body>
</html>