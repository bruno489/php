<?php
	
	session_start();
	$_SESSION["vnome"]="Bruno";
	$_SESSION["vtexto"]="Vamos Correr";
	$_SESSION['vlog']="s";

	echo $_SESSION["vnome"] . "<br>";
	echo $_SESSION["vtexto"] . "<br>";
	echo $_SESSION["vlog"] . "<br>";
	

/*
	session_start(); inicia a sessão
	$_SESSION["vnome"] atribui a variavel dentro da sessão
	
	pode ser utilizada para questoes de login em areas das paginas
	
	unset($_SESSION['vnome']);
	deleta a session
*/

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>SESSOES</title>
</head>

<body>
	<a href="pag2.php" target="_self">Pagina 2</a>
	
	<!--
	
	-->
</body>
</html>


