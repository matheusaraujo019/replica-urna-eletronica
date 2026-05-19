<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
    <link rel="stylesheet" href="estilo.css">

    <!-- 7 -->
</head>
<header><img src="fturna/tse.png"></header>
<body>
    <div class="conteudo"> <!--Início conteudo -->
        <div class="interface"><!-- Início EStilo Padrão todos os sites -->

            <?php
            include "mysqlconecta.php"; // Inclui o arquivo de conexão com o banco de dados

            $id        = $_POST['codigo']; // Obtém o código do candidato enviado pelo formulário
            $nome      = $_POST['nome']; // Obtém o nome do candidato enviado pelo formulário
            $sobrenome     = $_POST['sobrenome']; // Obtém o sobrenome do candidato enviado pelo formulário
            $numero  = $_POST['numero']; // Obtém o numero do candidato enviado pelo formulário
            $partido  = $_POST['partido']; // Obtém o partido do candidato enviado pelo formulário
            $cpf    = $_POST['Cpf']; // Obtém o cpf do candidato enviado pelo formulário
          

            // Atualiza os dados do Pokémon no banco de dados com base no código fornecido
            mysqli_query($conexao, "update candidato set can_nome = \"$nome\", can_sobrenome = \"$sobrenome\", can_numero = \"$numero\", 
            can_partido = \"$partido\", can_cpf = \"$cpf\"
            WHERE can_codigo = '$id'") or die("erro1000"); // Mensagem de erro caso a consulta falhe
            ?>

            <h1 class="titulo">CANDIDATO ALTERADO COM <span>SUCESSO</span></h1>




            <a class="voltar" href="index.php">INCLUIR</a><!--Botão para voltar para página index.php-->
            <a class="voltar" href="consultacan1.php">CONSULTA</a><!--Botão para voltar para página consulta.php-->

        </div><!-- Fim EStilo Padrão todos os sites -->
    </div> <!--Fim conteudo -->
</body>

</html>