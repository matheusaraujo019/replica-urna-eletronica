<?php
// Conexão com o banco de dados
include "mysqlconecta.php";

// Verificando a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Consultando os resultados da apuração
$query = mysqli_query($conexao, "SELECT c.can_nome as CANDIDATO,COUNT(v.vot_voto) as TOTAL_DE_VOTOS
FROM voto v, candidato c 
WHERE v.vot_voto = c.can_numero
GROUP BY c.can_numero");

// Verificando se a consulta retornou resultados
if (!$query) {
    die("Erro na consulta: " . mysqli_error($conexao));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuração de Votos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc;
            /* Bege claro */
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff8e1;
            /* Bege muito claro */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #d2b48c;
            /* Bege escuro */
        }

        th {
            background-color: #d2b48c;
            /* Bege escuro */
            color: #fff;
        }

        tr:hover {
            background-color: #fce5d6;
            /* Bege rosado */
        }
    </style>
</head>
<header><img src="fturna/tse.png"></header>

<body>

    <h1 style="color: #8b4513;">Resultado da Apuração</h1> <!-- Cor marron -->

    <table>
        <thead>
            <tr>
                <th>Candidato</th>
                <th>Total de Votos</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['CANDIDATO']); ?></td>
                    <td><?php echo htmlspecialchars($row['TOTAL_DE_VOTOS']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a class="votar" href="index.php" style="display: block; text-align: center; margin: 40px auto 0;">
        <button style="background-color: #A29A4D; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
            Voltar para página anterior
        </button>
    </a>

</body>

</html>

<?php
// Fechando a conexão com o banco de dados
mysqli_close($conexao);
?>