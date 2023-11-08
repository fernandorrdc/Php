<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis Primitivas-esccalares</title>

<style>

* {
    font-family:Arial, Helvetica, sans-serif;

}


</style>

</head>
<body>
    
    <h1>Tipos de variaveis</h1>
    <ol>
    
        <li>escalares</li>
        <ul>
            <li>
                string, int ou integer, float ou double (tanto faz) ,bool ou booleam, 
            </li>
        </ul>
        <li>compostas</li>
        <ul>
            <li>
                array ,object 
            </li>
        </ul>
        <li>especiais</li>
        <ul>
            <li>
                null, resource , callabe, mixed 
            </li>
        </ul>
    </ol>
    <br>

    <hr>

    <?php 
    
    //0x = hexadecimal  0b =binário  0= Octal

    $v = 010;
    $velev = 3e2; //elevado 3^2 
    $vexa = 0x1A; //hexadecimal
    $vbool = true;//bool ou booleam
    $t = (integer) "10";//posso atribuir

    $vetor = [3, "bicicleta" , 9.5, true];//vetor

    class animais {
        private string $tipo;
    }
    $cat = new animais;

    var_dump($v);
    //mostra tipo primitivo.
    //echo "valor da variável é: $v";
    
    ?>

</body>
</html>