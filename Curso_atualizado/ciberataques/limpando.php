<?php
	require_once 'connect.php';

function clear($option){
	global $con;
	
	//Sql não acrescentar butoes e afins
	$var=mysqli_escape_string($con,$option);
	//ataques por script
	$var2=htmlspecialchars($var);
	
	return $var2;
	
}

if(isset($_GET['btn-acrescentar'])){

		$nome=clear($_GET['nome']);
		$sql="INSERT INTO registros (nome) VALUES ('$nome')";
		
		mysqli_query($con,$sql);
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Deletar</title>
</head>

<body>
	
	<form name='registro'  action="limpando.php" method="get">
		Nome: <input type="text" name="nome"><br>
		
		<input type="submit" name="btn-acrescentar" value="Adicionar"><br>
	</form>
	
</body>
</html>