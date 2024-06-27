<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Senac Tech</title>
        <link rel="stylesheet" type="text/css" href="../../css/body.css"/>
        <link rel="stylesheet" type="text/css" href="../../css/menu.css"/>
    </head>

    <body><!--Abre o body-->
        
    <header>
            <a href="../../index.php"><img id="logo" src="../../imagens/senacLogo.png" alt="Logo Senac"/></a>
            <nav >
                <ul class="links">

                    <li class="dropdown">
                        Meu Senac
                        <ul id="conteudo">
                            <li><a href="./login.php">Log-in</a></li>
                            <li><a href="./cadastro.php">Cadastro</a></li>
                        </ul> 
                    </li>
                    <li class="dropdown">
                        Cursos
                        <ul id="conteudo">
                            <li><a href="../../paginas/cursostecnicos.php">Cursos Técnicos</a></li>
                            <li><a href="../../paginas/cursoslivres.php">Cursos Livres</a></li>
                            <li><a href="../../paginas/rsti.php">Programa RS TI</a></li>
                        </ul>       
                    </li>         

                    <li><a href="../../paginas/aprendizado.php">Aprendizado</a></li>
                    <li><a href="../../paginas/localizacao.php">Localização</a></li>
                    <li><a href="../../paginas/fale conosco/faleconosco.php">Fale Conosco</a></li>
                </ul>
            </nav>
        </header>

        <?php
            if(isset($_SESSION['nome_usu_sessao'])){
                echo '<a class="user">Olá '.$_SESSION['nome_usu_sessao'].', Seja bem vindo!</a>';

                echo "<a class='login' href='../meusenac/login.php?logout'>Logout</a>";
            }else{
                echo "<a class='textlogin' href='../meusenac/login.php'>Acessar sistema</a>";
            }
            if(isset($_GET['logout'])){
                session_destroy();
                header("Location: ../../index.php");

            }
		?>
        
        <div class="formulario">

            <form action="verificarLogin.php" class="login" method="post" name="login">

                <h1>Login</h1>
        
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="E-mail">
        
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Password">
                  
                <input type="submit" name="entrar" value="Entrar">
        
            </form>
        </div>
    </body>
</html>