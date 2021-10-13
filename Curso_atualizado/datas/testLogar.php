<?php
include_once 'connect.php';
$sql="SELECT * FROM clientes WHERE email='dora@gmail.com'";
$resultado=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($resultado);
$dataExpira=$dados['expira_em'];
$dataAtual=date('Y-m-d');

if($dataExpira>$dataAtual){
echo "Bem-Vindo, Porra!";}else{echo "Corrige isso, Maluco.";}