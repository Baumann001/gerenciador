<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['nome']) && isset($_POST['email'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Check if email already exists
        $check_sql = "SELECT id_usuario FROM usuarios WHERE email = '$email'";
        $result = $conn->query($check_sql);

        if ($result->num_rows > 0) {
            echo "Erro: O email '$email' já está cadastrado.";
        } else {
            $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

            if ($conn->query($sql) === true) {
                echo "Novo registro criado com sucesso.";
            } else {
                echo "Erro ao inserir: " . $conn->error;
            }
        }
    } else {
        echo "Erro: Campos obrigatórios não foram preenchidos.";
    }
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <header>
       
           
    </header>

    <main>
        

    <form method="POST" action="create_usuario.php">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_usuario.php">Ver registros.</a>
           
        
    </main>
</body>

</html>