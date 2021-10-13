<?php
	
if(isset($_POST['enviar-formulario'])){
	$erros=array();
	if(!$idade=filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)){
		$erros[]= "Idade precisa ser um inteiro";
	}
	/*
	Entendendo, se a idade não for um inteiro, a mensage 'idade precisa ser inteiro será acrescentada a erros'
	*/
	
	if(!$email=filter_input(INPUT_POST,'Email',FILTER_VALIDATE_EMAIL)){
		$erros[]= "E-mail invalido";
	}
	//Se o email não for valido, então acrescenta a mensagem em erros
	if(!empty($erros)){
		foreach($erros as $erro){
			echo "<li> $erro <li>";
		}
	}else{
			echo "Dados estão corretos";
		}
	/*
	Entendendo, se o campo erro não estiver vazio, o array erros será percorrido e exibido, se não, será exibida a mensagem "Dados estão corretos"
	*/
}
//Se clicar em enviar
/*
	$idade=filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)
	
	filter_input()
	faz a verificação do que é inserido dentro do banco de dados
	
	INPUT_POST primeiro parametro é o tipo de input
	
	'idade' o segundo parametro é o nome do campo
	
	FILTER_VALIDATE_INT o terceiro é o filtro, neste caso, verifica se o numero é inteiro
	
	empty($erros) verifica se a variavel erros está vazia
*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<form name="F_CadProd" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
		
		Idade: <input type="text" name="idade"/><br>
		Email: <input type="text" name="Email"/><br>
		Peso: <input type="text" name="Peso"/><br>
		IP: <input type="text" name="IP"/><br>
		URL: <input type="text" name="URL"/><br>
		
		<input type="submit" value="Gravar" name="enviar-formulario"/>
		
	
	</form>
</body>
</html>