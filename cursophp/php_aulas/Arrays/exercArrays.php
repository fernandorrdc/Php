<?php

//array

$frutas = array("Pera", "Uva", "Maçã");
$frutas[] = "Banana";
$frutas[5] = "Melancia";

print_r($frutas);

echo '<br>';
echo 'qtd de itens no vetor :' . count($frutas) . '';
echo '<br>';

echo $frutas[5];
echo '<hr>';

$legumes = array(1 => "Tomate", 2 => "alface", 3 => "Cenoura");
print_r($legumes);
echo '<br>';

$qtdLegumes = count($legumes);

echo '<i> Qtd de Legumes :</i><b> ' . $qtdLegumes . '</b>';
echo '<hr>';
echo '<br>';

//Arrays iniciados vazios - Acrescentados.

$disciplinas = array();
$disciplinas[1] = "Matemática";
$disciplinas[]  = "algoritimos";

print_r($disciplinas);

echo '<hr>';
echo '<br>';

//arrays sem o nome "array"

$roupas = [1 => "Blusa", 2 => "camisa", 3 => "calsa",];
print_r($roupas);

echo '<br> trabalhando com foreach: <br>';

//forreach

foreach ($roupas as $tipo) {
    echo $tipo . '<br>';
}
echo '<hr>';
echo '<br> Arrays associativos: <br>';

//Arrays associativos

$informatica = array("Mouse" => "Sem fio", "Serie" => 2235, "peso/kg" => 0.2);

print_r($informatica);
echo "<br>";

foreach ($informatica as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo '<hr>';
echo '<br> Arrays MULTIDIMENCNAIS:';


//arrays multidimencionais

$alugueis = array(

    "casas" => array("duplex", "Terrea", "triplex"),
    "carros"=> array("onix"=>"sedã", "uno"=>"mille", "kwid"=>1.0),
    "motos"=> array("Honda 125", "yamaha 125 ubs")

);
echo "<br>";
print_r($alugueis);
echo "<br>";

foreach ($alugueis["carros"] as $indice=>$valor){
    echo $indice .":".$valor."<br>";

}