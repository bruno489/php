<?php
	require_once 'connect.php';

	$erros=array();

	function clear($dado){
		global $con;
		$var=mysqli_escape_string($con,$dado);
		$var2=htmlspecialchars($var);
		
		return $var2;
	}
	/*
	function validaEmail(){
		if(filter_input(INPUT_GET,'$email',FILTER_VALIDATE_EMAIL)){
			clear($email);
		}else{
			$erros[]="Email invalido";
		}
	}
	*/
	if(isset($_GET['btn-enviar'])){
		if($emailValidado=filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL)){
		$nome=clear($_GET['nome']);
		$sobrenome=clear($_GET['sobrenome']);
		$email=clear($emailValidado);
		$idade=clear($_GET['idade']);
		
		$sql="INSERT INTO tb_cadastro (nome,sobrenome,email,idade) VALUES ('$nome','$sobrenome','$email','$idade')";
		mysqli_query($con,$sql);
		}else{
			$erros[]="Email invalido";
		}
	}

	if(isset($_GET['btn-alterar'])){
		
		$nome=clear($_GET['nome']);
		$sobrenome=clear($_GET['sobrenome']);
		$email=clear($_GET['email']);
		$idade=clear($_GET['idade']);
		
		$sql="UPDATE registros SET nome = '$nome' ,sobrenome= '$sobrenome',email='$email',idade = '$idade' WHERE nome ='$nome'";
		mysqli_query($con,$sql);
	}

	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<h4>Banco de dados</h4>
	<?php 
	if(!empty($erros)){
		foreach($erros as $erro){
			echo $erro;
		}
	}
	
	?>
	<form name='registro'  action="index.php" method="get">
		Nome: <input type="text" name="nome"><br>
		Sobrenome: <input type="text" name="sobrenome"><br>
		Email: <input type="text" name="email"><br>
		Idade: <input type="text" name="idade"><br>
		<input type="submit" name="btn-enviar" value="Cadastrar">
		<input type="submit" name="btn-deletar" value="Excluir">
		<input type="submit" name="btn-alterar" value="Salvar"><br>
	</form>
	
</body>
</html>