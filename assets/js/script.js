function insertData(){ //по нажатию кнопки "добавить книгу" появляется форма
	var form = document.getElementById('insertDiv');
	form.setAttribute("style","visibility: ");
}

function insertCancel(){ //по нажатию кнопки "отмена" убирается форма добавления записи
	var form = document.getElementById('insertDiv');
	form.setAttribute("style","visibility: hidden;");
}

function insertSubmit(){
	var genre = $('#insertGenre').val();
	var autor = $('#insertAutor').val();
	var name = $('#insertName').val();
	var year = $('#insertYear').val();
	$.ajax({
		type: "POST",
		url: "assets/action.php",
		data: {insertGenre:genre, insertAutor:autor, insertName:name, insertYear:year}
	}).done(function(){
		location.reload(true);
	});
}

$(document).ready(function(){
	$("#insertForm").on("submit", function(e){
		e.preventDefault();
	});
});