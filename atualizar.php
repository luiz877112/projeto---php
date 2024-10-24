<?php
include "conexao.php";
$cpf = $_POST['cpf_digitado'];
$nome = $_POST['nome_digitado'];
$data = $_POST['data_digitado'];
$telefone = $_POST['telefone_digitado'];


// 1º Passo - Comando SQL
$sql = "UPDATE tb_clientes SET 
        cpf_cliente='$cpf', nome_cliente='$nome',
        data_nascimento='$data', celular_cliente='$telefone'
         WHERE cpf_cliente='$cpf'";
// 2º Passo - Preparar a conexão
$atualizar = $pdo->prepare($sql);
// 3º Passo - Tentar executar
try{
    $atualizar->execute();
    if($atualizar->rowCount()>=1){
        echo "Atualizado com sucesso!";
    }else{
        echo "Falha ao atualizar!";
    }    
}catch(PDOException $erro){
    echo "Falha ao atualizar!".$erro->getMessage();
}

?>