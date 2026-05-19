<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
    <link rel="stylesheet" href="estilo.css">
    
    <!-- 5 -->
</head>
<header><img src="fturna/tse.png"></header>
<body>
    <div class="conteudo"> <!--Início conteudo -->
        <div class="interface"><!-- Início EStilo Padrão todos os sites -->
            <table class="tabela"><!--Início Classe Tabela-->

                <?php
                include "mysqlconecta.php";//Incluir os comandos do mysqlconecta.php
                
                $id = $_GET["id"];

                $query = mysqli_query($conexao, "delete from candidato where can_codigo = '$id'") or die ("error1000");
                
                
                echo ("<h1 class='titulo'>DELE<span>TADO!!!</span></h1>");


                ?>

        
            </table><!--Fim Classe Tabela-->
            
            <a class="voltar" href="index.php">INCLUIR</a><!--Botão para voltar para página index.php-->
            <a class="voltar" href="consultacan1.php">CONSULTA</a><!--Botão para voltar para página consulta.php-->

        </div><!-- Fim EStilo Padrão todos os sites -->
    </div> <!--Fim conteudo -->
</body>

</html>