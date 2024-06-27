<?php

    include('conexao.class.php');
    include('meusenac.class.php');

    $nome = $_POST['nome'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    $conexao = new conexao();

    $a = new MeuSenac();
    $a->setNome($nome);
    $a->setTelefone($telefone);
    $a->setUf($uf);
    $a->setCidade($cidade);
    $a->setEmail($email);
    $a->setSenha($senha);
    $a->setCpf($cpf);


    $cadastro = $conexao->cadastro($nome,$telefone,$uf,$cidade,$email,$senha,$cpf);

?>