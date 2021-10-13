<?php

if(isset($_GET['btn-enviar'])){
    $senha=$_POST['senha'];
    $novaSenha=0;
    
    while($test==false){
    
        $novaSenha=password_hash($senha,PASSWORD_DEFAULT);
        $test=password_verify($senha,$novaSenha);
    
        if($test==true){
            echo $senha;
        }else{
            $senha++;
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hacker.php" method="POST">
        <label for="Senha">Senha</label>
        <input type="text" name="Senha">
        <button type="Submit" name="btn-enviar">Hackear</button>
    </form>
</body>
</html>