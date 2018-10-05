

function searchTupla(){
	var search_id = document.getElementById('search_id').value;
	var dataEn = 'search_id='+search_id;

	$.ajax({
		type:'GET',
		url:'backend_revista_base.php',
		data:dataEn,
		success: function(resp){
			$('#status').html(resp)
		}
	});
}

function insertUser(){
	var identification = document.getElementById('identification').value;
	var first_name = document.getElementById('first_name').value;
	var last_name = document.getElementById('last_name').value;
	var age = document.getElementById('age').value;
	var city = document.getElementById('city').value;

	var dataEn = {
		'identification': identification,
		'first_name': first_name,
		'last_name': last_name,
		'age': age,
		'city': city
	};
	$.ajax({
		type:'POST',
		url:'backend_revista_base.php',
		data: dataEn,
		success: function(resp){
			$('#status').html(resp)
		}
	});


}