<!-- formulario_editar.php -->
 <?php
include "conexao.php";
$codigo = $_GET['cod'];

// 1º Passo - Comando SQL
$sql = "SELECT * FROM tb_clientes WHERE cpf_cliente='$codigo'";

// 2º Passo - Preparar a conexão
$consultar = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    $cpf = $resultado['cpf_cliente'];
    $nome = $resultado['nome_cliente'];
    $data = $resultado['data_nascimento'];
    $telefone = $resultado['celular_cliente'];
}catch(PDOException $erro){
    echo "Falha ao consultar!".$erro->getMessage();
}
?>

<h1>Cadastrar produto</h1>
<form action="atualizar.php" method="post">
    <label> Cpf: </label> <br>
    <input type="text" name="cpf_digitado" value='<?php echo $cpf;?>'> <br><br>

    <label> Nome: </label> <br><br>
    <input type="text" step="0.01" name="nome_digitado" value='<?php echo $nome;?>'> <br><br>

    <label> Data de nascimento: </label> <br>
    <input type="date" name="data_digitado" value='<?php echo $data;?>'> <br><br>

    <label> telefone </label> <br>
    <input type="tel"  name="telefone_digitado" required placeholder="(xx) xxxxx-xxxx" value='<?php echo $telefone;?>'><br><br>

    <button type="submit"> Salvar Alteração </button>
</form>