<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_tarefa = $_POST['id_tarefa'];
    $prioridade = $_POST['prioridade'];
    $status_tarefa = $_POST['status_tarefa'];

    $sql = "UPDATE tarefa SET prioridade='$prioridade', status_tarefa='$status_tarefa' WHERE id_tarefa='$id_tarefa'";
    if ($conn->query($sql) === TRUE) {
        echo "Tarefa atualizada com sucesso.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch tasks for selection
$sql_tasks = "SELECT id_tarefa, nome FROM tarefa";
$result_tasks = $conn->query($sql_tasks);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Tarefa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<form method="post" action="">
    <label for="id_tarefa">Tarefa:</label>
    <select name="id_tarefa" required>
        <option value="">Selecione uma tarefa</option>
        <?php while($row = $result_tasks->fetch_assoc()) { ?>
            <option value="<?php echo $row['id_tarefa']; ?>"><?php echo $row['nome']; ?></option>
        <?php } ?>
    </select><br>

    <label for="prioridade">Prioridade:</label>
    <select name="prioridade" required>
        <option value="baixa">Baixa</option>
        <option value="media">Média</option>
        <option value="alta">Alta</option>
    </select><br>

    <label for="status_tarefa">Status:</label>
    <select name="status_tarefa" required>
        <option value="a fazer">A Fazer</option>
        <option value="fazendo">Fazendo</option>
        <option value="pronto">Pronto</option>
    </select><br>

    <input type="submit" value="Atualizar Tarefa">
</form>

</body>
</html>
