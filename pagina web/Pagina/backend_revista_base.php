<?php
	

	require_once './conexion_bd.php';
	
	// capturar información del formulario de busqueda
	if(isset($_GET['search_id'])){
		$observerClass = new observer();
		$obj = $_GET['search_id'];
		$observerClass->getUser($mysqli,$obj);
	}

	class observer{
		function getUser($mysqli, $obj){

			$queryRevista = $mysqli -> query ("SELECT identification, first_name, last_name, age, city FROM usuario WHERE identification =".$obj."");

			sql_fetch_array($queryRevista);

			if(isset($_GET['search'])){
				if(count($valores) > 0){
					echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
				}else{
					echo "No estas registrado, por favor registrate antes de realizar una suscripción";
				}
			}	

			return fetch_array;
		}

		function insertUser($mysqli, $obj){
			if(isset($POST['identification'],$POST['first_name'],$POST['last_name'],$POST['age'],$POST['city'])){
				$valores = $mysqli->query("insertInto usuario(identification,first_name,last_name,age,city) values(".$obj->identification."','".$obj->first_name."','".$obj->last_name.",".$obj->age.",".$obj->city.")");
			}
		}
	}

?>