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
                include "mysqlconecta.php"; //Incluir os comandos do mysqlconecta.php
                session_start();

                $cpf = $_SESSION['cpf'];
                //Seleciona as colunas do banco de dados
                $query = mysqli_query($conexao, "SELECT ele_codigo,ele_nome,ele_sobrenome, ele_cpf, ele_telefone from eleitor where ele_cpf ='{$cpf}'");

                echo "<tr>  <th>Código</th> <th>Nome</th> <th>Sobrenome</th> <th>CPF</th>
     <th>Voto</th></tr>"; //Títulos das colunas da tabela

                //Enquanto tiver registro dentro de $query, não sairá do laço
                while ($saida = mysqli_fetch_array($query)) {

                    $codigo     = $saida[0]; //coluna 0
                    $nome    = $saida[1]; //coluna 1
                    $sobrenome      = $saida[2]; //coluna 2
                    $cpf   = $saida[3]; //coluna 3


                    //Cria a Tabela e coloca exibe na tela com as váriaveis que está no banco

                    echo ("<tr>");
                    echo (" <td> " . $codigo    .  "</td>");
                    echo (" <td> " . $nome      .  "</td>");
                    echo (" <td> " . $sobrenome     .  "</td>");
                    echo (" <td> " . $cpf    .  "</td>");
                    echo (" <td> <a class=deletar href=urna.php?id=" . $codigo . " >Votar</a></td>");
                }

                echo ("</tr>");
                mysqli_close($conexao);


                ?>

            </table><!--Fim Classe Tabela-->
            <a href="index.php" style="display: block; text-align: center; margin: 0 auto;">
                <button style="background-color: #A29A4D; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                    Voltar para página principal
                </button>
            </a>

        </div><!-- Fim EStilo Padrão todos os sites -->
    </div> <!--Fim conteudo -->
</body>

</html>7