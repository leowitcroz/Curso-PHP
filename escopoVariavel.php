<?php
//ESCOPO GLOBAL
$nome = "Leonardo";
$a = 1;
$b = 2;
$c = 3;


function exibeNome(){
//escopo local
    global $nome; //definindo a variavel global
    echo $nome;
}

exibeNome();

echo "<br>";

///////////////////////////

function exibeCidade(){
    global $cidade;
    $cidade = "curitiba";

}

exibeCidade();
echo $cidade;

//////////////////////

echo "<br>";

function soma(){
    //GLOBALS serve para pegar uma variavel global e inserir na funcao do escopo local


    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();