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
	var id_reg = document.getElementById('id_reg').value;
	var name = document.getElementById('name').value;
	var last_name = document.getElementById('last_name').value;
	var age = document.getElementById('age').value;
	var city = document.getElementById('city').value;

	var dataEn = {
		'id_reg': id_reg,
		'name': name,
		'last_name': last_name,
		'age': age,
		'city': city
	};
	$.ajax({
		type:'POST',
		url:'backend_revista_base.php',
		data: dataEn,
		success: function(resp){
			$('#status2').html(resp)
		}
	});
}

function checkAge(Age){
	if(Age.value.length > 1){
		return false;
	}
	return true;
}

function checkIDLen(id){
	if(id.value.length > 9){
		return false;
	}
	return true;
}