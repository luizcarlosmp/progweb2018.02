<?php // functions 

$nome = "Luiz Carlos Marques Pinto";

function getNome(){
    global $nome;
    echo $nome;
}

getNome();  

?>