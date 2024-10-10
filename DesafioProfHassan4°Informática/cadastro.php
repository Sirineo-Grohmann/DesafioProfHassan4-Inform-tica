<?php
    include_once('conexao.php');

    if(isset($_POST)){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['confirma_senha'];

           // Verifica se as senhas coincidem
        if ($senha !== $senha2) {
            die("As senhas não coincidem. Tente novamente.");
        }

    // Criptografa a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $query_cadastro = "INSERT INTO TB_cadastro (cad_nome, cad_sobrenome, cad_email, cad_telefone, cad_data_nasc, cad_senha)
            VALUES (:nome, :sobrenome, :email, :telefone, :data_nasc, :senha)";
            $stmt_cadastro = $conn->prepare($query_cadastro);

        try{
            $stmt_cadastro->execute([
                ':nome' => $nome,
                ':sobrenome' => $sobrenome,
                ':email' => $email,
                ':telefone' => $telefone,
                ':data_nasc' => $data_nasc,
                ':senha' => $senha_hash,
            ]);
            echo "Cadastro realizado com sucesso!";
        }   catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
    }


?>