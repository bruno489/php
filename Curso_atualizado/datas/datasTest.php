<?php
	include_once 'connect.php';

	if(isset($_POST['enviar'])){
	$nome=$_POST['nome'];
	$senha=$_POST['senha'];
	$email=$_POST['email'];
	$data=date('Y-m-d');
	$dataAtual=strtotime($data);
	$dataExpira=strtotime("+5 day",$dataAtual);
	$dataExpiraCon=date("Y-m-d",$dataExpira);

	$sql="INSERT INTO clientes (nome,email,senha,pago_em,expira_em) VALUES ('$nome','$email','$senha','$data','$dataExpiraCon')";
		
		if($resultado=mysqli_query($con,$sql)){header('location: testLogar.php');}
	
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<form action="datasTest.php" method="post">
		Nome: <br><input type="text" name="nome"><br>
		E-mail: <br><input type="text" name="email"><br>
		Senha: <br><input type="text" name="senha"><br>
		<br><input type="submit" name="enviar" value="Enviar"><br>
	</form>
</body>
</html>