<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições 2024</title>
    <link rel="stylesheet" href="estilo.css">
    <header><img src="fturna/tse.png"></header>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc; /* Fundo bege claro */
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .titulo {
            font-size: 2.5em;
            color: #8b4513; /* Cor marrom escuro */
            margin-bottom: 20px;
        }

        .navegacao {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navegacao a {
            margin: 10px 0;
            padding: 10px 20px;
            font-size: 1.2em;
            text-decoration: none;
            color: #fff;
            background-color: #8b4513; /* Cor marrom escuro */
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navegacao a:hover {
            background-color: #6f3512; /* Cor marrom mais escura para hover */
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="titulo">Eleições 2024</h1>
        <div class="navegacao">
            <a href="candidato.php">Candidato</a>
            <a href="eleitor.php">Eleitor</a>
            <a href="voto.php">Voto</a>
            <a href="apuracao.php">Apuração</a>
        </div>
    </div>

</body>

</html>
