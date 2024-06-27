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
                            <li><a href="../meusenac/login.php">Log-in</a></li>
                            <li><a href="../meusenac/cadastro.php">Cadastro</a></li>
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
                    <li><a href="../../paginas/faleconosco.php">Fale Conosco</a></li>
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
            <h1>Fale Conosco</h1>
            
            <form action="processaCadastro.php" method="post">

                <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required maxlength="75"/>

                <label for="uf">UF:</label>
                    <select id="uf" name="uf" required>
                        <option selected="" value="">Selecione o Estado (UF)</option>
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
                        
                <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade">
                    
                <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required placeholder="nome@dominio.com" 
                    title="O formato do e-mail deve ser: nome@dominio.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                    
                <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required title="O número deve ter 11 dígitos, contando com o DDD" 
                    pattern="[0-9]{11}"/>
                    
                <label for="modalidade">Modalidade:</label>
                    <select id="modalidade" name="modalidade" required>
                        <option selected="" value="">Selecionar a modalidade</option>
                        <option value="Curso Presencial">Curso Presencial</option>
                        <option value="Curso Técnico EAD">Curso Técnico EAD</option>
                    </select>
                    
                <label for="assunto">Assunto:</label>
                    <select id="assunto" name="assunto" required>
                        <option selected="" value="">Dúvidas/Informações</option>
                        <option value="Solicitações">Solicitações</option>
                        <option value="Elogios">Elogios</option>
                        <option value="Sugestões">Sugestões</option>
                        <option value="Reclamações">Reclamações</option>
                    </select>
                    
                <label for="observacao">Observação:</label>
                    <textarea id="observacao" name="observacao" rows="3" cols="30" required></textarea>
                
                <label for="cpf">CPF:</label>
                    <input type="tel" id="cpf" name="cpf" pattern="[0-9]{11}" required>
   
                <input type="submit" value="Cadastrar">
            </form>

        </div>
        
            
    </body><!--Fecha o body-->
</html>