<?php
require_once "../infra/conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_pedido = $_POST["nome_pedido"];
    $categoria = $_POST["categoria"];
    $urgencia = $_POST["urgencia"];
    $data_solicitacao = $_POST["data_solicitacao"];
    $status = $_POST["status"];

    $sql = "INSERT INTO pedido (nome_pedido, categoria, urgencia, data_solicitacao, status) VALUES ('$nome_pedido','$categoria','$urgencia','$data_solicitacao','$status')";
    $resultado = mysqli_query($conexao, $sql);
    header("Location: ../public/painel.php");
}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro_pedido.php" method="post">
        <label for="nome_pedido">Nome do pedido:</label>
        <input type="text" id="nome_pedido" name="nome_pedido" required><br><br>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" required><br><br>

        <label for="urgencia">Urgência:</label>
        <select id="urgencia" name="urgencia" required>
            <option value="baixa">Baixa</option>
            <option value="media">Média</option>
            <option value="alta">Alta</option>
        </select><br><br>
        
        <label for="data_solicitacao">Data de solicitação:</label>
        <input type="date" id="data_solicitacao" name="data_solicitacao" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="pendente">Pendente</option>
            <option value="em andamento">Em andamento</option>
            <option value="concluido">Concluído</option>
        </select><br><br>

        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>