<?php
//detalahando o super 
var_dump($_GET["a"]);
echo '<br>';

//efetuando casting  em tempo de execuçao
var_dump((int)$_GET);

echo '<br>';

//imprimir o valor pela chave 
echo($_GET['a']);

