<?php

include '../db.php';

$sql = "SELECT * FROM tarefa ";

$result = $conn->query($sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Tarefas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<?php
if ($result->num_rows > 0) {

    echo "<table>
        <tr>
            <th> ID do usuário </th>
            <th> ID da tarefa </th>
            <th> Nome </th>
            <th> Descrição </th>
            <th> Nome Do Setor </th>
            <th>  Prioridade </th>
            <th> Data de Cadastro </th>
            <th> Status da Tarefa</th>
            <th> Ações </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id_usuario']} </td>
                <td> {$row['id_tarefa']} </td>
                <td> {$row['nome']} </td>
                <td> {$row['descricao']} </td>
                <td> {$row['nome_setor']} </td>
                <td> {$row['prioridade']} </td>
                <td> {$row['data_cadastro']} </td>
                <td> {$row['status_tarefa']} </td>

                <td>
                    <a href='update_tarefa.php?id={$row['id_tarefa']}'>Editar</a>
                    <a href='delete_tarefa.php?id={$row['id_tarefa']}'>Excluir</a>

                </td>
              </tr>
        ";
    }
    echo "</table>";
} else {
    echo "<p>Nenhum registro encontrado.</p>";
}

$conn -> close();

echo "<a href='create_tarefa.php'>Inserir novo Registro</a>";
?>

</body>
</html>
