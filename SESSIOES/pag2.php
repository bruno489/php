<?php

	session_start();
	if($_SESSION["vlog"]=="s"){
	
	echo "<font color=red>" . $_SESSION["vnome"] ."</font>" . "<br>";
	echo $_SESSION["vtexto"];
	

/*
	
*/

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>SESSOES</title>
</head>

<body>
	
	<a href="sessoes.php" target="_self">Inicio</a>
	
	
	
	<!--
	
	-->
</body>
</html>

<?php
	}else{
		echo "Acesso não permitido";
	}
	

		?>


