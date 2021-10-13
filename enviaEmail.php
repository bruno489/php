<?php

$email="bguedes563@gmail.com";

$assunto="Confirmação de e-mail.";
$msg="www.porpes.com/index.php";
if(mail($email,$assunto,$msg,"FROM: contato@porpes.com")){
	echo "Enviado com sucesso!";
}else{ echo "Tem algum defeito aí, maluco.";}

