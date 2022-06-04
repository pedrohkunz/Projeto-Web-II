<?php 

use Database\Database;

require_once "../src/views/header_nav.php"; 
require_once "../src/model/Database.php";

$db = new Database();

$resultDb = $db->select(
    "SELECT * FROM pedidos;"
);

//var_dump($resultDb);
?>

<table class="table container mt-4 table-striped border-dark table-bordered">
    <thead class="bg-success text-white">
        <th>Código</th>
        <th>Data e hora</th>
        <th>Itens</th>
        <th>Quantidade</th>
        <th>Pagamento</th>
        <th>Entrega</th>
        <th></th>
        <th></th>
    </thead>

    <tbody>
        <?php foreach($resultDb as $linha) : ?>
            <tr>
                <td> <?= $linha->cod ?> </td>
                <td> <?= $linha->data_hora ?> </td>
                <td> <?= $linha->itens ?> </td>
                <td> <?= $linha->quant ?> </td>
                <td> <?= $linha->pag ?> </td>
                <td> <?= $linha->local ?> </td>
                <td>
                    <a href="../public/atualiza.php?cod=<?= $linha->cod ?>"> <img src="../public/assets/img/edit.svg" alt="Editar"></a>
                </td>
                <td>
                    <a onclick="confirmaDelete(<?= $linha->cod ?>);"> <img src="../public/assets/img/trash-fill.svg" alt="Apagar"></a>
                    
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    function confirmaDelete(id) {
        if( confirm("Deseja excluir o pedido "+id+"?") ) {
            window.location.href='../banco/apaga_pedido.php?cod='+id;
        } else {
            alert('exclusão cancelada!');
        }
    }   
</script>

<?php require_once "../src/views/footer.php"; ?>
