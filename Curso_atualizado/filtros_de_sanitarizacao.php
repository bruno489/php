<?php
	
if(isset($_POST['enviar-formulario'])){
	$erros=array();
	
	$nome=filter_input(INPUT_POST,'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	echo $nome;
	
	$idade=filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
	
	//fez a limpesa de caracteres não inteiros
	if(!filter_var($idade,FILTER_VALIDATE_INT)){
		$erros[]="Idade precisa ser um inteiro";
	}
	//fez a validação da variavel idade que limpou os caracteres não inteiros
	}
	//FILTER_SANITIZE_FULL_SPECIAL_CHARS filtra caracteres para que não inclua botoes e afins na pagina;

//Se clicar em enviar
/*
	filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)
	bom lembrar que se o valor recebido de idade for um inteiro, retornara verdadeiro, se não, falso
	
	
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
		
		Nome: <input type="text" name="nome"/><br>
		Idade: <input type="text" name="idade"/><br>
		Email: <input type="text" name="Email"/><br>
		Peso: <input type="text" name="Peso"/><br>
		
		<input type="submit" value="Gravar" name="enviar-formulario"/>
		
	
	</form>
</body>
</html>