<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id_tarefa = $_GET['id'];

    $sql = "DELETE FROM tarefa WHERE id_tarefa='$id_tarefa'";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Tarefa excluída com sucesso.</p>";
    } else {
        echo "<p class='error'>Erro: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Tarefa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<a href="read_tarefa.php">Voltar para a lista de tarefas</a>

</body>
</html>

