function getdetails(){
    var name = $('#name').val();
    var rno = $('#rno').val();
    $.ajax({
        type: "POST",
        url: "action.php",
        data: {fname:name, id:rno}
    }).done(function( result )
        {
            $("#msg").html( result );
        });
}