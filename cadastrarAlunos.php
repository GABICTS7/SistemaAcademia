<?php

// Estrutura para cadastro de alunos
if (isset($_POST['cadastrar_aluno'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $plano = $_POST['plano'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("INSERT INTO alunos (nome, email, cpf, plano) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $nome, $email, $cpf, $plano);

        if ($stmt->execute()) {
            redirecionar('dashboard.php', 'Aluno cadastrado com sucesso!');
        } else {
            redirecionar('dashboard.php', 'Erro ao cadastrar aluno.');
        }

        $stmt->close();
    } else {
        redirecionar('dashboard.php', 'Email inválido!');
    }
}



function exibirAlunos() {
    global $conn;
    $result = $conn->query("SELECT * FROM alunos");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['cpf']}</td>
                    <td>{$row['plano']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nenhum aluno cadastrado.</td></tr>";
    }
}


?>