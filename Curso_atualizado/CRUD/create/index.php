<?php
	require_once 'connect.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<form name='registro'  action="creat.php" method="get">
		Nome: <input type="text" name="nome"><br>
		Sobrenome: <input type="text" name="sobrenome"><br>
		Email: <input type="text" name="email"><br>
		Idade: <input type="text" name="idade"><br>
		<input type="submit" name="btn-enviar"><br>
	</form>
	
</body>
</html>