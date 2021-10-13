<?php
$senha="123456";

$novaSenha=md5($senha);
//muito simples, quando for fazer o login, criptografe a senha inserida pelo usuário e compare com a senha já constante no banco de dados

$senhasha1=sha1($senha);
//mesmo jeito do md5

echo $novaSenha."<br>";
echo $senhasha1;

?>
