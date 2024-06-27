<?php

    include('conexao.class.php');
    include('faleconosco.class.php');

    $nome = $_POST['nome'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $modalidade = $_POST['modalidade'];
    $assunto = $_POST['assunto'];
    $observacao = $_POST['observacao'];
    $cpf = $_POST['cpf'];

    $conexao = new conexao();

    $fc = new faleconosco();
    $fc->setNome($nome);
    $fc->setUf($uf);
    $fc->setCidade($cidade);
    $fc->setEmail($email);
    $fc->setTelefone($telefone);
    $fc->setTelefone($modalidade);
    $fc->setAssunto($assunto);
    $fc->setObservacao($observacao);
    $fc->setCpf($cpf);


    $cadastro = $conexao->cadastro($nome,$uf,$cidade,$email,$telefone,$modalidade,$assunto,$observacao,$cpf);

?>