<?php
	require_once "connect.php";

	session_start();

if(isset($_GET['enviar'])){
	
	$erros=array();
	$login=mysqli_escape_string($con,$_GET['login']);
	$senha=mysqli_escape_string($con,$_GET['senha']);
	
	if(empty($login) or empty($senha)){
		$erros[]="<li>Login/Senha tem que ser preenchidos</li>";
	}else{
		$sql="SELECT username FROM tb_cadastro WHERE username = '$login'";
		$resultado=mysqli_query($con,$sql);
		
		if(mysqli_num_rows($resultado)>0){
			//$senha=md5($senha); serve para criptografar a senha antes de enviar
			$sql="SELECT * FROM tb_cadastro WHERE username = '$login' AND senha = '$senha'";
			$resultado=mysqli_query($con,$sql);
			
			if(mysqli_num_rows($resultado) == 1){
				
				$dados=mysqli_fetch_array($resultado);
				$_SESSION['logado']=true;
				$_SESSION['id']=$dados['cod'];//Aqui ele pegou o codigo do usuario que foi colocado no array dados
				
				header('location: home.php');//função responsavel por redirecionar
				
			}else{
				
				$erros[]="<li>usuario e senha não conferem</li>";
				
			}
			
		}else{
			$erros[]="<li> Usuario inexistente</li>";
		}
		
	}
	
}

mysqli_close($con);
/*
mysqli_escape_string(conexao,de onde será recebido);
é basicamente um filtro que prepara para comparar com o banco de dados

empty() verifica se esta vazio
se sim, retorna positivo
é como se "a variavel $login estiver vazia"

mysqli_fetch_array();
converte o resultade obtido em um array
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<h2>Login</h2>
	<?php
		if(!empty($erros)){
			foreach($erros as $erro){
				echo $erro."<br>";
			}
		}//se o array $erros não estiver vazio...
	?>
	<hr>
	<form name="login1" method="GET" action="index.php">
	username: <input type="text" name="login"><br>
	senha: <input type="password" name="senha"><br>
	<input type="submit" value="Entrar" name="enviar">
	</form>
</body>
</html>