<?php
require_once 'connect.php';
$senha="123456";
$novaSenha='$2y$10$WhqlQeqKMTsGGDZZUrds.ub.etGCbwluRK7qKrrrFe2YNDNxQ5S0C';
//senha criptografada, lembrar de colocar em aspas simples

$senhaSegura=password_hash($senha,PASSWORD_DEFAULT);
//Aqui ele cria uma criptografia segura da senha
//IMPORTANTISSIMO é colocar um campo com 255 caracteres na coluna da senha, pois o hash pode vim cada vez maior
echo $senhaSegura."<br>";
echo $novaSenha."<br>";

$sql="INSERT INTO clientes (senha) VALUES ('$senhaSegura')";
mysqli_query($con,$sql);

if(password_verify($senha,$novaSenha)){
	echo "senhas conferem";
}else{
	echo "senhas não conferem";
}
//no caso infraescrito, foi verificado se a senha é igual ao hash, se positivo então emitia a mensagem das senhas conferem

?>
