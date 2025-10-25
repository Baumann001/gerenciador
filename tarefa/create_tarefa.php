<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $nome_setor = $_POST['nome_setor'];
    $prioridade = $_POST['prioridade'];
    $data_cadastro = $_POST['data_cadastro'];
    $status_tarefa = $_POST['status_tarefa'];

    $sql = "INSERT INTO tarefa (id_usuario, nome, descricao, nome_setor, prioridade, data_cadastro, status_tarefa) VALUES ('$id_usuario', '$nome', '$descricao', '$nome_setor', '$prioridade', '$data_cadastro', '$status_tarefa')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <form method="POST" action="">

        <label for="id_usuario">ID Usuário:</label>
        <input type="number" name="id_usuario" required><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="nome_setor">Nome do Setor:</label>
        <input type="text" name="nome_setor" required><br>

        <label for="prioridade">Prioridade:</label>
        <select name="prioridade" required>
            <option value="baixa">Baixa</option>
            <option value="media">Média</option>
            <option value="alta">Alta</option>
        </select><br>

        <label for="data_cadastro">Data de Cadastro:</label>
        <input type="datetime-local" name="data_cadastro" value="<?php echo date('Y-m-d\TH:i'); ?>" required><br>

        <label for="status_tarefa">Status da Tarefa:</label>
        <select name="status_tarefa" required>
            <option value="a fazer">A Fazer</option>
            <option value="fazendo">Fazendo</option>
            <option value="pronto">Pronto</option>
        </select><br>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_tarefa.php">Ver registros.</a>

</body>

</html>