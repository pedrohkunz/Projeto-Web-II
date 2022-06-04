<?php

echo "<h1>Hello world!</h1>";
    
    echo "<hr style='background-color: blue; height: 20px'>";

//Declaração e atribuição de variáveis

$nome = "Pedro Henrique";
$sobrenome = "Kunz Gomes";

//constantes

echo "<hr>";

define('BANCO_DE_DADOS', '../banco_de_dados/bd.sql');

echo BANCO_DE_DADOS;
echo "<br>";

    //Concatenando strings

    echo $nome ." ". $sobrenome;

    $num1= "22.2";
    $num2= 11;

    echo "<hr>";
    
     var_dump($num1);
     var_dump($num2);

//Operadores aritméticos ( + - * / )

echo "<hr>";

    echo ($num1 + $num2) . "<br>";
    echo ($num1 - $num2) . "<br>";
    echo ($num1 * $num2) . "<br>";
    echo ($num1 / $num2) . "<br>";

    $n1 = 6.5;
    $n2 = 8.9;

    $media= ($n1 + $n2) /2;
         echo $media;

         //Operadores relacionais (de comparação)

        /*
        igual       ==
        diferente   !=
        maior       >
        menor       <
        maior igual >=
        menor igual <=
        */

echo "<hr>";

        var_dump(
            ($nome == $sobrenome)
        );

        var_dump(
            ($n1 > $n2)
        );

        var_dump(
            (strlen($nome) <= 14)
        );

        //Operadores Lógicos

    /*
      AND &&
      OR  ||
      NOT !
    */

$login= "dentinho";

$pass= "senha1234";

    echo "<hr>";
    
    //PHP é case sensitive
    //diferencia maiúsculas de minúsculas
    
    if($login == "dentinho" && $pass == "senha1234") {
        echo "<h1>Bem Vindo!</h1>";
    } else{
        echo "<h1>Acesso Negado!</h1>";
    }
    
echo "<hr>";

$cores= [
    "verde",
    "amarelo",
    "vermelho"
];

//echo $cores[0] . "<br>";
//echo $cores[1] . "<br>";
//echo $cores[2] . "<br>";
$sinaleira = $cores[random_int(0, 2)];


if ($sinaleira == 'verde') {
    echo "<h3 style='color: green'> Siga em frente! </h3>";
} elseif ($sinaleira == 'amarelo') {
    echo "<h3 style='color: yellow'>Atenção!</h3>";
} else {
    echo "<h3 style='color: red'>Pare!</h3?";
}

//Laços de repetição

echo "<hr>";

//FOR => Inicio; condição; Incremento

for($i = 1; $i <= 100; $i++ ) {
    echo"7 x $i = " . ($i * 7) . "<br>";
}

//WHILE => condição

echo "<hr>";

$count=0;

while($count < 10) {
    echo $count . " - ";
    $count++; 
}

echo "<hr>";

//FOREACH => lista "as" referencia

$pecas =[
    "Teclado",
    "Mouse",
    "Placa Mae",
    "Cooler",
    "Placa de video",
    "Processador",
    "Memória Ram",
    "Monitor",
    "ssd",
    "hd",
    "fone de ouvido"
];

//for($i= 0; $i < count($pecas); $i++){
//    echo $pecas[$i] . " / ";
//}

foreach($pecas as $p){
    echo $p . " - ";
}

    