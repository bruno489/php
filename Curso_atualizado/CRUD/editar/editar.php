<?php
	require_once'connect.php';

	if(isset($_GET['btn-editar'])){
		
		$id="3";
		$nome=mysqli_escape_string($con,$_GET['nome']);
		$sobrenome=mysqli_escape_string($con,$_GET['sobrenome']);
		$email=mysqli_escape_string($con,$_GET['email']);
		$idade=mysqli_escape_string($con,$_GET['idade']);
		
		$sql="UPDATE registros SET nome ='$nome', sobrenome = '$sobrenome',email='$email',idade='$idade' WHERE id='$id'";
		$resultado=mysqli_query($con,$sql);
		
		if(mysqli_query($con,$sql)){
			header('location:index.php?atualizado_com_sucesso');
		}else{
			header('location:index.php?erro_ao_atualizar');
		}
		
	}
?>

