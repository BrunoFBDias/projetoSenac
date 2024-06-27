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

        <div class="corpoCursos">
            <div class="cardCursos">
                <img src="../imagens/cursoTDS.jpg" alt="código fonte"/>
                
                <div class="cardDir">
                    <h1>Técnico em Análise de Sistemas</h1>
                    <p>
                        Com duração de 21 meses, o curso Técnico em Desenvolvimento de Sistemas 
                        prepara você a exercer funções técnicas, como: administração do sistema de banco de dados, 
                        desenvolver software, programar rotinas de sistema utilizando linguagens e técnicas de programação, 
                        programação de sistemas para desktop e para web, entre outras atividades. Todo conhecimento adquirido 
                        é comprovado pelo diploma do Senac, que é reconhecido nacionalmente e entregue a você após conclusão do curso.
                    </p>

                    <button>Saiba mais</button> 
                </div><!--Fecha o cardDir-->
            </div><!--Fecha cardCursos-->

            <div class="cardCursos">
                <img src="../imagens/cursoTecInf.jpg" alt="código fonte"/>
                
                <div class="cardDir">
                    <h1>Técnico em Informática</h1>
                    <p>
                        Você busca uma oportunidade de inserção no mercado de trabalho? A área de Informática 
                        fascina você? Se as respostas forem sim, o curso Técnico em Informática do Senac-RS foi feito para você! 
                        A formação vai te preparar para fazer o planejamento e pela execução dos processos de manutenção de 
                        computadores e pela operação de redes locais de computadores. Além de, desenvolver aplicativos computacionais, 
                        adotando normas técnicas, de qualidade, de saúde, de segurança do trabalho e preservação ambiental no desempenho
                        de sua função. 
                    </p>

                    <button>Saiba mais</button> 
                    
                </div><!--Fecha o cardDir-->
            </div><!--Fecha cardCursos-->

            <div class="cardCursos">
                <img src="../imagens/cursoADM.png" alt="código fonte"/>
                
                <div class="cardDir">
                    <h1>Técnico em Administração</h1>
                    <p>
                        Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos empresariais? Se as 
                        respostas forem sim, o curso Técnico em Administração do Senac-RS foi feito para você! A formação vai
                        te preparar para desempenhar funções voltadas para a gestão de pessoas, operações logísticas, gestão de
                        materiais e patrimônio, marketing, vendas, finanças, entre outros.
                    </p>

                    <button>Saiba mais</button> 
                </div><!--Fecha o cardDir-->
            </div><!--Fecha cardCursos-->

        </div> <!--Encerra o container corpoCursos-->
        
            
    </body><!--Fecha o body-->
</html>