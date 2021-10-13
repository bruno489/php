<?php
	
if(isset($_POST['enviar-formulario'])){
$formatosPermitidos=array("png","jpg","jpeg");
	
$extensao=pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);
	
	if(in_array($extensao,$formatosPermitidos)){
		$pasta="arquivos/";
		$temporario = $_FILES['arquivo']['tmp_name'];
		$novoNome=uniqid().".$extensao";
		
		if(move_uploaded_file($temporario,$pasta.$novoNome)){
			$mensagem="Upload feito com sucesso";
		}else{$mensagem="upload não foi possivel";}
	}else{
		$mensagem= "não existe";}
}




/*	
	$extensao=pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);
	}
	
	pathinfo() Pega a extensao do arquivo
	
	pathinfo($_FILES['nome do arquivo']['name'],informação que deseja);
	PATHINFO_EXTENSION para a extensao
	
	
	in_array($extensao,$formatosPermitidos
	verifica se a extensao do arquivo selecionado existe em existe no formatosPermitidos
	
	uniqid() vai gerar um novo nome
*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<form name="F_CadProd" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
		
		
		<input type="file" name="arquivo"/><br>
		
		<input type="submit" value="Gravar" name="enviar-formulario"/>
		
	
	</form>
</body>
</html>