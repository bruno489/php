<?php
session_start();//inicia a sessão nessa pagina
session_unset();//limpa a sessão
session_destroy();//destroi a sessão

header('location:index.php'); //redireciona para a pagina principal

