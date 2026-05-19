<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Alteração</title> 
    <link rel="stylesheet" href="estilo.css"> 
</head>
<header><img src="fturna/tse.png"></header>
<body>
    <div class="conteudo"> <!-- Início da seção de conteúdo -->
        <div class="interface"> <!-- Início da interface padrão de estilo para todos os sites -->

            <form method="post" action="alterarcan2.php"> <!-- Formulário para envio de dados com método POST -->
                <h1 class="titulo">ALTE<span>RAÇÃO</span></h1> <!-- Título da página -->

                <table class="tabela"> <!-- Início da tabela -->
                    <?php
                    include "mysqlconecta.php"; // Inclui o arquivo de conexão com o banco de dados

                    $id = $_GET["id"]; // Obtém o ID do candidato da URL

                    // Consulta ao banco de dados para selecionar os detalhes do candidato pelo código
                    $query = mysqli_query($conexao, "SELECT can_codigo, can_nome, can_sobrenome,can_numero, can_partido, can_cpf FROM candidato 
                    WHERE can_codigo = '$id'") or die ("erro10000"); // Mensagem de erro caso a consulta falhe

                    // Cabeçalho da tabela com os títulos das colunas
                    echo "<tr>  <th>Código</th> <th>Nome</th> <th>Sobrenome</th> <th>Numero</th> <th>Partido</th> <th>Cpf</th>
                     <th>Confirmar</th></tr>"; 

                    // Loop para exibir os dados do candidato
                    while ($saida = mysqli_fetch_array($query)) {
                        // Armazena os dados do candidato em variáveis
                        $codigo     = $saida[0]; // Código do candidato
                        $nome       = $saida[1]; // Nome do candidato
                        $sobrenome      = $saida[2]; // Sobrenome do candidato
                        $numero   = $saida[3]; // numero do candidato
                        $partido   = $saida[4]; // partido do candidato
                        $cpf     = $saida[5]; // cpf do candidato
                        

                        // Criação de uma nova linha na tabela com os dados e campos para edição
                        echo ("<tr class='databases'>");
                        echo (" <td><input type='hidden' name='codigo' value='$codigo'> $codigo </td>"); // Campo oculto para o código
                        echo (" <td> <input class='alteracao' type='text' name='nome'value='$nome'> </input></td>"); // Campo de texto para nome
                        echo (" <td><input class='alteracao' type='text' name='sobrenome'value='$sobrenome'> </input></td>"); // Campo numérico para sobrenome
                        echo (" <td> <input class='alteracao' type='number' name='numero'value='$numero'> </input></td>"); // Campo numérico para numero
                        echo (" <td> <input class='alteracao' type='text' name='partido'value='$partido'> </input></td>"); // Campo de texto para partido
                        echo (" <td> <input class='alteracao' type='number' name='Cpf'value='$cpf'> </input></td>"); // Campo de texto para cpf
                        echo ("<td><input class='confirmar' type='submit' value='Ok'></input></td>"); // Botão para confirmar alteração
                    }
                    
                    echo ("</tr>"); // Fecha a última linha da tabela
                    mysqli_close($conexao); // Fecha a conexão com o banco de dados
                    ?>
                    </tr>
                </table><!-- Fim da tabela -->

            </form>

            <!-- Links para voltar a outras páginas -->
            <a class="voltar" href="index.php">INCLUIR</a> <!-- Botão para voltar para a página de inclusão -->
            <a class="voltar" href="consultacan1.php">CONSULTA</a> <!-- Botão para voltar para a página de consulta -->

        </div><!-- Fim da interface padrão -->
    </div> <!-- Fim da seção de conteúdo -->
</body>

</html>
