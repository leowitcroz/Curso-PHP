<?php

$carros = array("BMW","Veloster", "palio" );

print_r($carros); // especifico para mostrar array

echo "<hr>";

echo $carros[2];

echo "<hr>";
///////////////////////////////////


$carros[] = "Uno";// adiciona um intem no array

print_r($carros);

echo "<br>$carros[3]";

echo "<hr>";

//////////////////////////////////

$paises = array("Brasil","Franca", "Peru");

echo count($paises)."<br>"; // como se fosse a funcao lenght


// For each

foreach($paises as $pais){
    echo "$pais <br>";
}

// Arrays associativos

$pessoa = array(
    "nome" => "Leo",
    "idade" => 19,
    "altura" => 1.79
);

$pessoa["cidade"] = "curitiba"; // adiciona no array

echo $pessoa["nome"]."<br>";

foreach($pessoa as $chave => $valor ){
    echo $chave.":".$valor."<br>";
}


/////////

$times = array(
    "cariocas" => array("campeao"=>"vasco","vice"=>"flamengo","terceiro"=>"botafogo"),
    "paulistas" => array("peixe"=>"santos","tricolor"=>"sao paulo","verdao"=>"palmeiras"),
    "paranaense" => array("coxa"=>"coritiba","furacao"=>"atletico","falido"=>"parana")
);

echo $times["cariocas"]["campeao"]."<br>";

foreach($times["cariocas"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

foreach($times["paulistas"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

foreach($times["paranaense"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

