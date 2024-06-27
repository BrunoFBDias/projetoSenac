<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Senac Tech</title>
        <link rel="stylesheet" type="text/css" href="./css/body.css"/>
        <link rel="stylesheet" type="text/css" href="./css/menu.css"/>
    </head>

    <body><!--Abre o body-->
        
        <header>
            <a href="#"><img id="logo" src="./imagens/senacLogo.png" alt="Logo Senac"/></a>
            <nav >
                <ul class="links">

                    <li class="dropdown">
                        Meu Senac
                        <ul id="conteudo">
                            <li><a href="./paginas/meusenac/login.php">Log-in</a></li>
                            <li><a href="./paginas/meusenac/cadastro.php">Cadastro</a></li>
                        </ul> 
                    </li>
                    <li class="dropdown">
                        Cursos
                        <ul id="conteudo">
                            <li><a href="./paginas/cursostecnicos.php">Cursos Técnicos</a></li>
                            <li><a href="./paginas/cursoslivres.php">Cursos Livres</a></li>
                            <li><a href="./paginas/rsti.php">Programa RS TI</a></li>
                        </ul>       
                    </li>         

                    <li><a href="./paginas/aprendizado.php">Aprendizado</a></li>
                    <li><a href="./paginas/localizacao.php">Localização</a></li>
                    <li><a href="./paginas/fale conosco/faleconosco.php">Fale Conosco</a></li>
                </ul>
            </nav>
        </header>

        <?php
            if(isset($_SESSION['nome_usu_sessao'])){
                echo '<a class="user">Olá '.$_SESSION['nome_usu_sessao'].', Seja bem vindo!</a>';

                echo "<link rel='stylesheet' type='text/css' href='css/logout.css'>
                <a class='textlogin' href='Pagina formulario/pagina ./paginas/meusenac/login.php?logout'>Logout</a>";
            }else{
                echo "<link rel='stylesheet' type='text/css' href='css/logout.css'>
                <a class='textlogin' href='./paginas/meusenac/login.php'>Acessar sistema</a>";
            }
            if(isset($_GET['logout'])){
                session_destroy();
                header("Location: ./index.php");

            }
		?>

        <div class="fundo">
            <div class="fundoConteudo">
                <p>
                    O Serviço Nacional de Aprendizagem Comercial – Senac é uma instituição 
                    de educação profissional, fundada em 10 de janeiro de 1946 com o objetivo 
                    de colaborar na obra, difusão e aperfeiçoamento do ensino profissional no 
                    setor terciário.
                </p>
                <p>
                    No Rio Grande do Sul, o Senac foi instalado em 13 de setembro
                    do mesmo ano e nos mais de 70 anos de atuação já capacitou mais de 8 milhões 
                    de gaúchos. 
                </p>
                 <p>
                    A instituição cumpre a importante missão de educar para o trabalho 
                    em atividades do comércio de bens, serviços e turismo. O Senac-RS faz parte da 
                    Federação do Comércio de Bens e Serviços do Rio Grande do Sul – Fecomércio-RS, 
                    que vincula a entidade ao mundo do trabalho por meio de 530 mil empresas do 
                    comércio de bens, serviços e turismo – que geram um milhão de empregos formais.
                 </p>
            </div>
            
        </div>

        <div id="alunos">
            <h1 id="depoimentos">Depoimentos de alunos:</h1>

            <div class="gridAlunos">
                <div id="gridItem1">
                    <img src="./imagens/linusTorvalds.png" alt="Linus Torvalds"/>
                    <p class="nomegrid1"> Linus Torvalds</p>
                    <p class="textogrid1">"Aprendi muito sobre Linux com o Jassa.<br> Grande homem." </p>
                </div>

                <div id="gridItem2">
                    <img src="./imagens/zucc3.png" alt="Mark Zuckerberg"/>
                    <p class="nomegrid2"> Mark Zuckerberg</p>
                    <p class="textogrid2"> "O Facebook jamais teria sido criado sem as aulas de front-end do Programa RS TI"</p>
                </div>

                <div id="gridItem3">
                    <img src="./imagens/dennisRitchie.png" alt="Dennis Ritchie"/>
                    <p class="nomegrid3"> Dennis Ritchie</p>
                    <p class="textogrid3">"Sou eternamente grato ao Professor Miguel por ter me introduzido ao mundo da programação."</p>
                </div>

                <div id="gridItem4">
                    <img src="./imagens/tanenbaum.png" alt="Andrew S. Tanenbaum"/>
                    <p class="nomegrid4"> Andrew S. Tanenbaum</p>
                    <p class="textogrid4">"Graças ao Rubens, consegui meu primeiro estágio na área de redes"</p>
                </div>

            </div>    
        </div>

        <div id="corpo">
            <h1>Conheça a escola!</h1>

            <iframe 
                width="65%" height="480" src="https://www.youtube.com/embed/c2ptmroeOwQ?si=I1vCbhgJ33wAwuN-" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
            ></iframe>
        </div>
            
    </body><!--Fecha o body-->
</html>