<h1>Cadastrar produto</h1>
<form action="inserir.php" method="post">
    <label> Cpf: </label> <br>
    <input type="text" name="cpf_digitado"> <br><br>

    <label> Nome: </label> <br><br>
    <input type="text" step="0.01" name="nome_digitado"> <br><br>

    <label> Data de nascimento: </label> <br>
    <input type="date" name="data_digitado" min="2000-01-01" max="2024-01-01"> <br><br>

    <label> telefone </label> <br>
    <input type="tel"  name="telefone_digitado" required placeholder="(xx) xxxxx-xxxx"><br><br>

    <button type="submit"> Cadastrar </button>
</form>