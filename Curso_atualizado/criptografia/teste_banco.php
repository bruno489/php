<?php
require_once 'connect.php';
$senha="123456";
$senhaSegura=password_hash($senha,PASSWORD_DEFAULT);


$sql="SELECT * FROM clientes WHERE id = '31'";
$resultado=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($resultado);

$novaSenha=$dados['senha'];
echo $novaSenha."<br>";

if(password_verify($senha,$novaSenha)){
	echo "senhas conferem";
}else{
	echo "senhas não conferem";
}
//no caso infraescrito, foi verificado se a senha é igual ao hash, se positivo então emitia a mensagem das senhas conferem

?>
