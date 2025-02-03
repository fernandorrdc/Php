<?php

//Arrais

$carros = array("Gol", "celta", "kdete");

//Inserindo elementos no Arrai.
$carros[] = "Jaguar";
$carros[7] = "duster";


print_r($carros);

// contando a quantidade de itens do Arrai
echo '<br> ';
echo 'qtd Elementos ';
echo count($carros);

echo '<hr>';
echo $carros[0];
echo '<hr>';

$animais = array(1=>"gato",2=>"pato", 3=>"cachorro");//numerando os arreays 

print_r($animais);

echo "<br>";
$totalAnimais = count($animais);
echo 'qtd elementos '.$totalAnimais.'<br>';

echo 'terceiro animal :<b>'.$animais[3] ;
echo "<br>";

//foreach

foreach ($animais as $tipo){
    echo $tipo ."<br>";
}


echo '<hr>';

$motos = array();
$motos [] = "Honda";
$motos [3] = "Yamaha";

print_r($motos);


echo '<hr>';


$alunos = ["ana", "Leticia","Maria Helena",];
print_r($alunos);

echo '<hr>';


echo '<hr>';

//Array ASSOCIATIVOS

$objetos = array("Objeto"=>"Mesa","Altura"=>1.2 ,"peso-Kg"=>3);
$objetos["cor"]= "branca";

print_r($objetos);

echo '<br>';

foreach ($objetos as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

echo '<hr>';

//Arrays MULTIDIMENCIONAIS;

$lutas = array (
    "Karate" => array("Shotokan", "Wado-ryu", "Goju-ryu"),
    "kung Fu"=> array("Shaolin", "Hung Gar", "Sanda"),
    "Capoeira"=> array("Angola", "Regional", "Contemporânea")
    );

    print_r($lutas);
    echo '<br>';

foreach ($lutas["Karate"] as $valor){
    echo 'karate: '.$valor.'<br>';
}
//busc por indices
echo 'Capoeira por indice.<br>';
echo $lutas["Capoeira"][1];
echo '<br>';
