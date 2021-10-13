<?php
	
	class login{
		static $usuario;
		
		static function verifica(){
			echo "O usuario ".self::$usuario." está logado";
		}
		
		function oi(){
			echo "<br>olá!";
		}
	}
	
login::$usuario="Bruno";
login::verifica();

$amanda=new login();
$amanda->oi();

/*
	static não precisa criar um novo objeto, é so usar os dois pontos
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


