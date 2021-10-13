<?php
date_default_timezone_set('America/Sao_Paulo');
//adiciona o horario brasileiro

$data='2019-12-1';
$novaData=strtotime($data);
//echo date('d/m/Y',$novaData);

$dataExpira=date('2021-06-06');
$dataAtual=date('Y-m-d');
//A verificação só vai funcionar se for no formato do php

echo "Data atual: ".$dataAtual.'<br>';
echo "Data que Expira: ".$dataExpira.'<br>';

if($dataAtual < $dataExpira){
	echo "Segue Jogo, maluco.";
	
}else{
	echo "Me paga velhaco.";
}

/*
echo date('d');
retorna o dia com dois digitos

echo date('D');
Retorna em formato textual do dia da semana

echo date('m');
Retorna o mes em formato numerico

echo date('M');
Retorna o mes em formato por extenso

echo date('y');
retorna o ano em formato de dois digitos

echo date('Y');
retorna o ano com 4 digitos

echo date('d/m/Y');
imprime 14/05/2021

echo date('l');
dia da semana em formato textual completo
ex:friday

echo date('h');
Horario no formato de 12h

echo date('H');
horario no formato de 24h

echo date('i');
mostra os minutos

echo date('s');
mostra os segundos

echo date('H:i:s');
mostra completo

echo date('d/m/Y H:i:s');
mostra data e hora

$date = date('Y-m-d');
//para armazenar data no banco de dados (formato date)

$datetime=date('Y-m-d H-i-s');
//formato data e hora (datetime)

$data='2019-12-1';
$novaData=strtotime($data);
echo date('d/m/Y',$novaData);
Formatando a data
*/
?>