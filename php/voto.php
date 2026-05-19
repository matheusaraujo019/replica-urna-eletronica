<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar eleitor</title>
    <link rel="stylesheet" href="estilo.css">
   
</head>
<header><img src="fturna/tse.png"></header>
<body>
    <div class="conteudo"><!--Início Conteudo-->
        <div class="interface"><!-- Início Estilo Padrão todos os sites -->
            <h1 class="titulo">Con<span>sulta CPF eleitor </span></h1>
            <div id="conteiner-form">

                <form method="post"><!--Início Formulário-->
                    <fieldset>
                        <label>Digite seu CPF:</label>
                        <input type="text" name="cpf" required>
                        <input class="submit" type="submit" value="Consultar">
                    </fieldset>
                </form><!--Fim Formulário-->
            </div>

            
        </div><!-- Fim Estilo Padrão todos os sites -->
    </div><!--Fim Conteudo-->
    <a class="votar" href="index.php" style="display: block; text-align: center; margin: 0 auto;">
                <button style="background-color: #A29A4D; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                    Voltar para página principal
                </button>
            </a>
</body>

</html>

<?php

include "mysqlconecta.php"; //Incluir os comandos do mysqlconecta.php   
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $cpf = $_POST['cpf'];

    $_SESSION['cpf'] = $cpf; 

    //Seleciona as colunas do banco de dados
    $query = mysqli_query($conexao, "SELECT ele_codigo,ele_nome,ele_sobrenome, ele_cpf, ele_telefone from eleitor where ele_cpf ='{$cpf}'");
    
    $row = $query->fetch_row();
    if ($row > 0) {
        header("Location: consultacpf.php");
        exit();
    } else {
        echo '<div style="text-align: center; margin-top: 20px; color: red; font-weight: bold; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 10px; border-radius: 5px;">ERRO: ELEITOR ERRADO</div>';

    }
}
?>
