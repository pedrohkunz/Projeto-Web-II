<?php

use Database\Database;
use Model\Pedido;

    require_once '../vendor/autoload.php';

    //Criando um novo objeto da classe Pedido!
    $ped = new Pedido();



//Recebendo Ingrediente

if( isset($_GET['ingrediente']) ) {
    $ped->itens = $_GET['ingrediente'];
} else {
    $ped->itens = null;
}

//Recebendo qtde

if( isset($_GET['qtde']) ) {
    $ped->quant = $_GET['qtde'];
} else {
    $ped->quant = null;
}

//Recebendo pgto

if( isset($_GET['pgto']) ) {
    $ped->pag = $_GET['pgto'];
} else {
    $ped->pag = null;
}

//Recebendo entrega

if( isset($_GET['entrega']) ) {
    $ped->local = $_GET['entrega'];
} else {
    $ped->local = null;
}

$listaItems= null; //Criando variavel para receber itens

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>

   <?= $ped->gerarDesconto() ?>

    <h3> Itens: </h3>

    <?php foreach($ped->itens as $item) : ?>

<!-- Estrutura que se repete quantas vezes necessário -->
            <h5>  
                <?php 
                echo $item;
                $listaItems .= $item . ', '; 
                ?> 
            </h5>
        <?php endforeach?>

    <h3> Quantidade: </h3>
    <h5>  <?= $ped->quant ?> </h5>

    <h3> Pagamento: </h3>
    <h5> <?= $ped->pag ?> </h5>

    <h3> Entrega: </h3>
    <h5>  <?= $ped->local ?> </h5>
<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////
require_once "../src/model/Database.php";
$db= new Database();

$db->insert(
    "INSERT INTO pedidos(data_hora, itens, quant, pag, local)
    VALUES('$ped->dataHora' , '$listaItems' , $ped->quant , '$ped->pag' , '$ped->local'); "
);
////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
</body>
</html>