
function insert(){
    var genre = $('#genre').val();
    var autor = $('#autor').val();
    var name = $('#name').val();
    var year = $('#year').val();
    $.ajax({
        type: "POST",
        url: "insert.php",
        data: {genre:genre, autor:autor, name:name, year:year}
    }).done(function(html)
    {
    location.reload(true);
    });
}
      
function deleteData(value){
	var id = value;
	$.ajax({
		type: "POST",
		url: "delete.php",
		data: {id:id}
	}).done(function(html){
		location.reload(true);
	});
}

function updateData(value){
	var num = value;
	var form = document.getElementById('updateForm');
	form.setAttribute("style","visibility: ");
	var button = document.getElementById('updateSubmit');
	button.setAttribute("value",num);
}

function updateDB(value){
	var id = value;
    var genre = $('#upGenre').val();
    var autor = $('#upAutor').val();
    var name = $('#upName').val();
    var year = $('#upYear').val();
    $.ajax({
        type: "POST",
        url: "update.php",
        data: {id:id, genre:genre, autor:autor, name:name, year:year}
    }).done(function(html)
    {
    location.reload(true);
    });
}