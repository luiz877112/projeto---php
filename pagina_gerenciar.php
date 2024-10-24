
<!-- pagina_gerenciar.php -->
<h1>Produtos cadastrados</h1>

<form action="" method="get">
     <input type="text"
            name="palavra_pesquisada"
            placeholder="Digite um termo para pesquisa"
            size="60">
    <button type="submit"> 🔍 Pesquisar </button>
</form>

<div id="clientes">
<link rel='stylesheet' href='estilo.css'>
<?php
include "conexao.php";

// 1º Passo - Comando SQL
$sql = "SELECT * FROM tb_clientes";
if(isset ($_GET['palavra_pesquisada'])){
    $termo = $_GET['palavra_pesquisada'];
    $sql = "SELECT * FROM tb_clientes
    WHERE nome_cliente LIKE '%$termo%' ";
}
// 2º Passo - Preparar a conexão
$consultar = $pdo->prepare($sql);
// 3º Passo - Tentar executar
try{
   $consultar->execute();
   $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
   foreach($resultados as $item){
        $cpf_encontrado = $item['cpf_cliente'];
        $nome_encontrado = $item['nome_cliente'];
        $data_encontrado = $item['data_nascimento'];
        $telefone_encontrado = $item['celular_cliente'];

        echo "
            <div class='cartoes'>
                numero de cpf: $cpf_encontrado <br>
                nome: $nome_encontrado <br>
                data de nascimento: $data_encontrado <br>
                telefone: $telefone_encontrado <br><br>
                <a href='formulario_editar.php?cod=$cpf_encontrado'>
                   <button>✏️Editar</button>
                </a>
                <a href='confirmar.php?cod=$cpf_encontrado'>
                <button>🗑️Deletar</button>
            </a>
            </div>
        ";

   }

}catch(PDOException $erro){
    echo "Falhar ao consultar!".$erro->getMessage();
}
?>

</div>