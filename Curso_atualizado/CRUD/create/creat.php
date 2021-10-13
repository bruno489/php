<?php
	require_once'connect.php';

	if(isset($_GET['btn-enviar'])){
		
		$nome=mysqli_escape_string($con,$_GET['nome']);
		$sobrenome=mysqli_escape_string($con,$_GET['sobrenome']);
		$email=mysqli_escape_string($con,$_GET['email']);
		$idade=mysqli_escape_string($con,$_GET['idade']);
		
		$sql="INSERT INTO registros (nome,sobrenome,email,idade) VALUES ('$nome','$sobrenome','$email','$idade')";
		
		if(mysqli_query($con,$sql)){
			header('location:index.php?sucesso');
		}else{
			header('location:index.php?erro');
		}
		
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
</body>
</html>