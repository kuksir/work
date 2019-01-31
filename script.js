function insertData(){ //по нажатию кнопки "добавить книгу" появляется форма
	var form = document.getElementById('insertDiv');
	form.setAttribute("style","visibility: ");
}

function insertCancel(){ //по нажатию кнопки "отмена" убирается форма добавления записи
	var form = document.getElementById('insertDiv');
	form.setAttribute("style","visibility: hidden;");
}

function updateData(value){
	var updateID = value;
	var upForm = document.getElementById('updateSubmit');
	upForm.setAttribute("value",updateID);
	var form = document.getElementById('updateDiv');
	form.setAttribute("style","visibility: ");
	var id = value;
	$.ajax({
		type: "POST",
		url: "assets/updateForm.php",
		data: {id:id},
		success:function(data){
			var arr_data = JSON.parse(data);
				updateGenreUp = document.getElementById('updateGenre');
				updateAuthorUp = document.getElementById('updateAutor');
				updateNameUp = document.getElementById('updateName');
				updateYearUp = document.getElementById('updateYear');
			updateGenreUp.setAttribute("value", arr_data[0]['genre']);
			updateAuthorUp.setAttribute("value", arr_data[0]['autor']);
			updateNameUp.setAttribute("value", arr_data[0]['name']);
			updateYearUp.setAttribute("value", arr_data[0]['year']);
		}
	});
}

function updateCancel(){
	var form = document.getElementById('updateDiv');
	form.setAttribute("style","visibility: hidden;");
}

function deleteData(value){
	var deleteID = value;
	$.ajax({
		type: "POST",
		url: "assets/delete.php",
		data: {deleteID:deleteID},
		success:function(html){
			location.reload();
		}
	});
}

function insertSubmit(){
	var genre = $('#insertGenre').val();
	var autor = $('#insertAutor').val();
	var name = $('#insertName').val();
	var year = $('#insertYear').val();
	$.ajax({
		type: "POST",
		url: "assets/insert.php",
		data: {genre:genre, autor:autor, name:name, year:year},
		success:function(html){
			location.reload();
		}
	});
}

function updateSubmit(value){
	var id = value;
		genre = $('#updateGenre').val();
		autor = $('#updateAutor').val();
		name = $('#updateName').val();
		year = $('#updateYear').val();
	$.ajax({
		type: "POST",
		url: "assets/update.php",
		data: {id:id, genre:genre, autor:autor, name:name, year:year},
		success:function(html){
			location.reload();
		}
	});
}