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

            <h1>Cadastro</h1>

            <form class="form" action="processaCadastro.php" method="post">
            
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>

                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone" pattern="[0-9]{11}" required>

                <label for="UF">*UF</label>
                <select name="uf" id="uf" required>
                    
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Sul" selected>Rio Grande do Sul</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>                  
                
                </select>

                <label for="cidade" >Cidade</label>
                <input type="text" name="cidade" id="nome" placeholder="Cidade" required>
            
                <label for="email" >Email</label>
                <input type="email" name="email" id="email" placeholder="seuemail@email.com" required>

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Senha"  >

                <label for="cpf">CPF</label>
                <input type="tel" name="cpf" id="nome" placeholder="CPF" pattern="[0-9]{11}" required>

                <button type="submit" name="Submit" >Cadastrar</button>
                
            </form>
        </div>
    </body>
</html>