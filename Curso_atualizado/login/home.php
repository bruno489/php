<?php
	require_once 'connect.php';
	
	session_start();

	if(!$_SESSION['logado']==true){
		header('location:index.php');
	}

$id=$_SESSION['id'];

$sql="SELECT * FROM tb_cadastro WHERE cod = $id";
$resultado=mysqli_query($con,$sql);

$dados=mysqli_fetch_array($resultado);

mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

	Olá <?php echo $dados['nome']; ?>!
	
	<a href="logout.php">Sair</a>
	
<body>
</body>
</html>