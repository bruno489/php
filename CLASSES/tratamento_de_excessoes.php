<?php
	
	class Newsletter{
		function cadastrarEmail($email){
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				throw new exception("Este email é invalido",1);
			}else{echo "Email cadastrado com sucesso";}
		}
	}
	
	$newsletter=new Newsletter();

	try{
	$newsletter->cadastrarEmail("contato@");
	}catch(Exception $e){
		echo $e->getMessage();
	}

/*
	filter_var($nome da variaver, filtro que sera utilizado)
	filtra uma determinada variavel
	FILTER_VALIDATE_EMAIL
	
*/

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>CLASSES</title>
</head>

<body>
	
	<!--
	
	-->
</body>
</html>


