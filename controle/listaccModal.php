<?php

	session_start();

	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$id_usuario = $_SESSION['id_usuario'];
	$id_centro_custo = $_POST['id'];
	$objDb = new db();
	$link = $objDb->conecta_mysql();


	$sql = " SELECT * from lc_centro_custo where id_centro_custo = $id_centro_custo";
	$resultado_id = mysqli_query($link, $sql);
	
	
	$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	echo json_encode($registro);
	



?>


		
		

	