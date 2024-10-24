<?php
//Cadastrar.php
include "conexao.php";

$cpf =  $_POST['cpf_digitado'];
$nome = $_POST['nome_digitado'];
$data = $_POST['data_digitado'];
$telefone = $_POST['telefone_digitado'];

$sql = "INSERT INTO tb_clientes
        (cpf_cliente, nome_cliente, data_nascimento, celular_cliente)
        VALUES
        ('$cpf', '$nome', '$data', '$telefone')";
$inserir=$pdo->prepare($sql);
try{
    $inserir->execute();
    echo "Cadastrado com sucesso!";

}catch(PDOException $erro){
    echo "Falha ao inserir!". $erro->getMessage();
}

?>