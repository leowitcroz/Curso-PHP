<?php

// Dados Escalares //

//String

$string = "Isso é uma string <br>";
var_dump($string);

if(is_string($string)):
    echo "isso realmente é uma string";
else:
    echo 'nao é string';
endif;

echo '<hr>';

// numeros inteiros

$idade = 27;
var_dump($idade);

echo '<hr>';

// float

$altura = 1.72;

echo "$altura <br>";
var_dump($altura);


echo '<hr>';

// booleanos

$admin = true;
var_dump($admin);
echo '<hr>';

/***** compostos *****/

$carros = array("gol","uno", " camaro",12);
var_dump($carros);
echo "<br>$carros[2]";

// objeto

class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this -> $nome = $nome;
    }
}

$cliente = new Cliente();
$cliente -> atribuirNome("leo");
var_dump($cliente);