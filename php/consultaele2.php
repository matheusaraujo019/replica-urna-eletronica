<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="estilo.css">
    
    <!-- 4 -->
</head>
<header><img src="fturna/tse.png"></header>
<body>
    <div class="conteudo"> <!--Início conteudo -->
        <div class="interface"><!-- Início EStilo Padrão todos os sites -->
            <table class="tabela"><!--Início Classe Tabela-->

                <?php
                include "mysqlconecta.php";//Incluir os comandos do mysqlconecta.php

                $busca = $_POST["busca"];

                //Seleciona as colunas do banco de dados
                $query = mysqli_query($conexao, "SELECT ele_codigo, ele_nome, ele_sobrenome, ele_cpf, ele_telefone from eleitor");

                //Cria os títulos das colunas 
                echo "<tr>  <th>Código</th> <th>Nome</th> <th>Sobrenome</th> <th>CPF</th> <th>Telefone</th>
                <th>Deletar</th> <th>Alterar</th></tr>";//Títulos das colunas da tabela
                
                //Enquanto tiver registro dentro de $query, não sairá do laço
                while ($saida = mysqli_fetch_array($query)) {

                    $codigo     = $saida[0];//coluna 0
                    $nome       = $saida[1];//coluna 1
                    $sobrenome      = $saida[2];//coluna 2
                    $cpf   = $saida[3];//coluna 3
                    $telefone   = $saida[4];//coluna 4
                   
                    //Cria a Tabela e coloca exibe na tela com as váriaveis que está no banco

                    echo ("<tr>");
                    echo (" <td> " . $codigo    .  "</td>");
                    echo (" <td> " . $nome      .  "</td>");
                    echo (" <td> " . $sobrenome     .  "</td>");
                    echo (" <td> " . $cpf  .  "</td>");
                    echo (" <td> " . $telefone  .  "</td>");
                    echo (" <td> <a class=deletar href=excluirele.php?id=". $codigo ." >Deletar</a></td>");
                    echo (" <td> <a class=alterar href=alterarele1.php?id=". $codigo ." >Alterar</a></td>");
                }
       
                echo ("</tr>");
                mysqli_close($conexao);
                
                ?>

            </table><!--Fim Classe Tabela-->

            <a class="voltar" href="index.php">INCLUIR</a><!--Botão para voltar para página index.php-->
            <a class="voltar" href="consultaele1.php">CONSULTA</a><!--Botão para voltar para página consulta.php-->

        </div><!-- Fim EStilo Padrão todos os sites -->
    </div> <!--Fim conteudo -->
</body>

</html>