<?php
	require_once 'connect.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Deletar</title>
</head>

<body>
	
	<form name='registro'  action="delete.php" method="get">
		Nome: <input type="text" name="nome"><br>
		
		<input type="submit" name="btn-deletar" value="Deletar"><br>
	</form>
	
</body>
</html>