<?php
	
	if(isset($_GET["f_nome"])){
		$vnome=$_GET["f_nome"];
		echo "Nome: $vnome";
	}else{
		echo "Dados não enviados";
	

/*
	Testa se uma variavel existe ou não
	isset($variavel);
*/

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Isset</title>
</head>

<body>
	
	<form nome="f_form" mothod="get" action="isset.php">
		
		<input type="text" name="f_nome"/><br>
		<input type="submit" value="Enviar"/>
	
	</form>
	<!--
	
	-->
</body>
</html>

<?php
	}

/*
	Apos a execução do codigo, o formulario ira desaparecer
*/
?>
