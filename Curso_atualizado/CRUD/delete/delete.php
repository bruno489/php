<?php
	require_once'connect.php';

	if(isset($_GET['btn-deletar'])){
		
		
		$nome=mysqli_escape_string($con,$_GET['nome']);
		
		
		$sql="DELETE FROM registros WHERE nome='$nome'";
		
		if(mysqli_query($con,$sql)){
			header('location:index.php?sucesso_ao_deletar');
		}else{
			header('location:index.php?erro_ao_deletar');
		}
		
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Deletar</title>
</head>

<body>
</body>
</html>