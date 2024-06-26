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

                echo "<a class='login' href='../meusenac/login.php?logout'>Logout</a>";
            }else{
                echo "<a class='textlogin' href='../meusenac/login.php'>Acessar sistema</a>";
            }
            if(isset($_GET['logout'])){
                session_destroy();
                header("Location: ../../index.php");

            }
		?>

        <div id="textoLoc">
            <p><h1>Localização da escola:</h1></p>
            
            <p><h2>Av. Venâncio Aires, 93</h2></p>
            <p><h3>Bairro: Cidade Baixa</h3></p>
            <p><h3>Porto Alegre - RS, 90040-191</h3></p>
        </div>

        <div id="container__localizacao">    
            <div id="mapa">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13816.317867813132!2d-51.2302101933054!3d-30.034577948853475!2m3!1f0!2f0!3f
                    0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978567f17f28d%3A0x2c2c5272bacf4d3a!2sSenac%20Tech!5e0!3m2!1sen!2sbr!4v1712644370995!5m2!1sen!2sbr"
                    width="700" height="550" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <img id="fachadaSenac" src="../imagens/fachadaSenac.jpg"/>
            </div>
        </div>
        
        
            
    </body><!--Fecha o body-->
</html>