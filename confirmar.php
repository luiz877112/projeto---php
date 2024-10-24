<?php
// confirmar.php
$cpf_cliente = $_GET['cod'];
echo "
        <h1> Tem certeza que deseja 
             excluir o cpf nº $cpf_cliente?
        </h1>
        <br><br>
        <a href='deletar.php?cod=$cpf_cliente'>
            Sim
        </a>
        <br><br>
        <a href='pagina_gerenciar.php'>
            Não
        </a>

    ";
?>