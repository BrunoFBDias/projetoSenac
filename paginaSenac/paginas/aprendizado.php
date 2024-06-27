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

        <h1 id="tituloAprendiz">Programa Menor Aprendiz</h1>
        <div id="aprendiz">
                <img id="fotoAprendiz" src="../imagens/jovemAprendiz.png" alt="jovens aprendizes"/>

                <section id="textoAprendiz">
                    <p>
                        Com certeza você já deve ter se perguntado qual o melhor caminho para o mundo do 
                        trabalho pra quem ainda não possui experiência profissional ou um curso de destaque 
                        no currículo e temos a resposta: ser Jovem Aprendiz!
                    </p>
                    <p>
                        O Programa une a capacitação teórica, 
                        que pode ser realizada nas modalidades presencial ou EaD, com a prática profissional que 
                        você desenvolverá na empresa. Perfeito, né?
                    </p>
                    <p>
                        Você precisa…Ter de 14 a 24 anos incompletos, estar cursando o Ensino Fundamental, Médio ou já
                        ter concluído o Ensino Médio. E se for PcD, não tem limite de idade para ser um Jovem Aprendiz.
                    </p>
                </section>
        </div>

        <div class="botoes">
            <a href="https://senacrs.com.br/hotsite/jovemaprendiz/docs/2024/EDITAL%20APRENDIZAGEM%202024.pdf">Edital Jovem Aprendiz</a>
            <a href="https://senacrs.com.br/hotsite/jovemaprendiz/empresa.html">Quero ser Empresa Contratante</a>
            <a href="https://senacrs.com.br/hotsite/jovemaprendiz/jovem-aprendiz.html">Quero ser Jovem Aprendiz</a>
        </div>
        
    </body><!--Fecha o body-->
</html>