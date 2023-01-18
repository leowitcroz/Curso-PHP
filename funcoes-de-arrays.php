<?php

/* 
 * is_array($array) = verifica se uma determinada variável é um array.
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
 * array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
 * array_pop($array) = exlui a ultima posição do array.
 * array_shift($array) = exclui a primeira posição do array.
 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
 * array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
 * array_combine($keys, $values) = mescla os dois arrays passados.
 * array_sum() = calcula a soma dos elementos de array.
 * explode("/", "20/01/2001") = transforma strings em array.
 * implode("-", $array) = transforma array em string.
 */




// is_array, verifica se uma var é uma array

$nomes = array("leo","rafa","mel");

echo is_array($nomes)."<br>";// 1 = true, 0 = false

if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;

//in_array, se um valor existe no array

echo "<br>".in_array("leo", $nomes)."<br>";


// array_keys, mostra os indices/chaves do array

$keys = array_keys($nomes);

print_r($keys);

// array_value

$values = array_values($nomes);
echo "<hr>";

print_r($nomes);






