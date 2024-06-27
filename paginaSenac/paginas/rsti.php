<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Senac Tech</title>
        <link rel="stylesheet" type="text/css" href="../css/body.css"/>
        <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
    </head>

    <body><!--Abre o body-->
        
        <header>
            <a href="../index.php"><img id="logo" src="../imagens/senacLogo.png" alt="Logo Senac"/></a>
            <nav >
                <ul class="links">

                    <li class="dropdown">
                        Meu Senac
                        <ul id="conteudo">
                            <li><a href="./meusenac/login.php">Log-in</a></li>
                            <li><a href="./meusenac/cadastro.php">Cadastro</a></li>
                        </ul> 
                    </li>
                    <li class="dropdown">
                        Cursos
                        <ul id="conteudo">
                            <li><a href="./cursostecnicos.php">Cursos Técnicos</a></li>
                            <li><a href="./cursoslivres.php">Cursos Livres</a></li>
                            <li><a href="./rsti.php">Programa RS TI</a></li>
                        </ul>       
                    </li>         

                    <li><a href="./aprendizado.php">Aprendizado</a></li>
                    <li><a href="./localizacao.php">Localização</a></li>
                    <li><a href="./fale conosco/faleconosco.php">Fale Conosco</a></li>
                </ul>
            </nav>
        </header>

        <?php
            if(isset($_SESSION['nome_usu_sessao'])){
                echo '<a class="user">Olá '.$_SESSION['nome_usu_sessao'].', Seja bem vindo!</a>';

                echo "<a class='login' href='./meusenac/login.php?logout'>Logout</a>";
            }else{
                echo "<a class='textlogin' href='./meusenac/login.php'>Acessar sistema</a>";
            }
            if(isset($_GET['logout'])){
                session_destroy();
                header("Location: ../../index.php");

            }
		?>

        <div class="containerRSTI">
            <div class="cardRSTI">
                <div id="imgCard"><img src="../imagens/banner-rsti.png"/></div>
                <h1>Sobre o Programa</h1>

                <p>
                    O Programa RS TI foi desenvolvido pelo Senac-RS com o objetivo
                    de capacitar pessoas para atuarem no mercado de Tecnologia da 
                    Informação do Rio Grande do Sul, a fim de desenvolver habilidades 
                    técnicas necessárias para atuação como Desenvolvedores de Software.
                </p>
            </div>
        </div>
        
            
    </body><!--Fecha o body-->
</html>