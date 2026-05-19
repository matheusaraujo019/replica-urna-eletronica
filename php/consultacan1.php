<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta</title>
    <link rel="stylesheet" href="estilo.css">

    <!-- 3 -->
</head>
<header><img src="fturna/tse.png"></header>

<body>
    <div class="conteudo"><!--Início Conteudo-->
        <div class="interface"><!-- Início EStilo Padrão todos os sites -->
            <h1 class="titulo">Con<span>sulta </span></h1>
            <div id="conteiner-form">

                <form method="post" action="consultacan2.php"><!--Início Formulário-->
                    <fieldset>
                        <!--localizar-->
                        <label>localizador:</label>
                        <input type="text" name="busca">

                        <!--Botão que leva para a página -->
                        <input class="submit" type="submit" value="&">
                    </fieldset>
                </form><!--Fim Formulário-->
            </div>
        </div><!-- Fim EStilo Padrão todos os sites -->
    </div><!--Fim Conteudo-->
    <a href="index.php" style="display: block; text-align: center; margin: 0 auto;">
        <button style="background-color: #A29A4D; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
            Voltar para página principal
        </button>
    </a>
</body>

</html>