<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header><img src="fturna/tse.png"></header>
<body>
<div class="conteudo"><!--Início Conteudo-->
        <div class="interface"><!-- Início EStilo Padrão todos os sites -->
            <h1 class="titulo">Registro <span> Eleitor </span></h1>
            <div id="conteiner-form">
            <center>
                <form method="post" action="gravarele.php"><!--Início Formulário-->
                    <fieldset>
                        <!--Nome-->
                        
                        <input type="text" name="nome"  placeholder="Nome:">

                        <!--Sobrenome-->
                       
                        <input type="text" name="sobrenome"  placeholder="Sobrenome:">

                        <!--CPF-->
               
                        <input type="number" name="Cpf" placeholder="CPF:">

                          <!--Telefone-->
                          
                        <input type="number" name="Telefone" placeholder="Telefone:">

                        <!--Enviar-->
                        <input class="submit" type="submit">

                    </fieldset>
                </form><!--Fim Formulário-->
</center>
            </div>

        </div><!-- Fim EStilo Padrão todos os sites -->
    </div><!--Fim Conteudo-->
    <a href="index.php" style="display: block; text-align: center; margin: 0 auto;">
                <button style="background-color: #A29A4D; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                    Voltar para página anterior
                </button>
            </a>
</body>
</html>