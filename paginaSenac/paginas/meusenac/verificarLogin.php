<?php

    include('conexao.class.php');
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $entrar = $_POST['entrar'];

    $conexao = new conexao();

    $conn = $conexao->getConnection();

    $cripto = hash("sha3-512",$senha);

    if(isset($entrar)){
        $verifica = mysqli_query($conn,"SELECT * FROM meusenac WHERE email = '$email' AND senha = '$cripto'")
        or die("Erro ao buscar no banco!");
        if(mysqli_num_rows($verifica)<=0){
            echo "<script language='javascript' type='text/javascript'>
            alert('Usuario ou senha incorretos!');
            window.location.href='login.php';
            
            </script>";
            die();
        }else{
            session_start();
            $_SESSION['nome_usu_sessao']=$email;
            header("Location: ../../index.php");
        }
    }

?>