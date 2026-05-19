<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Gravar</title>
   
    <!-- 2 -->
</head>
<header><img src="fturna/tse.png"></header>
<body>
    <div class="conteudo"><!--Início Conteudo-->
        <div class="interface"><!-- Início EStilo Padrão todos os sites -->
            <?php
            include "mysqlconecta.php";
            /*Recebe as informações do form do index.php e cria variáveis */
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $cpf = $_POST['Cpf'];
            $telefone = $_POST['Telefone'];
            

            if (empty($nome) || empty($sobrenome) || empty($cpf) || empty($telefone)) {
                header("location: eleitor.php");
                exit();
                /*Se todos os campos forma preenchidos, cria uma simples tabela com as variáveis coletadas */
            } else {
                echo "<table class='tabela'>";
                echo "  <tr><th>Nome</th><th>Sobrenome</th><th>Cpf</th><th>Telefone</th></tr>";
                echo "  <tr>";
                echo "      <td>" . $nome      . "</td>";
                echo "      <td>" . $sobrenome     . "</td>";
                echo "      <td>" . $cpf  . "</td>";
                echo "      <td>" . $telefone  . "</td>";
                echo "</tr>";
                echo "</table>";
                /*Adiciona as variáveis no banco de dados chamando produto */
                $query = mysqli_query($conexao, "INSERT INTO eleitor (ele_nome, ele_sobrenome, ele_cpf, ele_telefone) 
                VALUES ('$nome','$sobrenome','$cpf','$telefone');");
       
                /*Confirma que está gravado no banco da dados*/
                echo "<h1 class='gravado'>Gra<span>vado!!</span></h1>";

                mysqli_close($conexao);
            }
            ?>

            <a class="voltar" href="consultaele1.php">Consultar o eleitor</a>
            
        </div><!-- Fim EStilo Padrão todos os sites -->
    </div><!--Fim Conteudo-->
</body>

</html>