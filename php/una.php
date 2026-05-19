
<?php
    $id = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna Eletrônica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .urna {
            width: 600px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tela {
            width: 100%;
            height: 50px;
            background-color: #000;
            color: #00ff00;
            font-size: 32px;
            text-align: center;
            line-height: 50px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .botoes {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .botoes input {
            width: 100%;
            padding: 20px;
            font-size: 18px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .botoes input:hover {
            background-color: #555;
        }

        .botoes input[type="submit"].confirma {
            background-color: green;
        }

        .botoes input[type="submit"].corrige {
            background-color: orange;
        }

        .botoes input[type="submit"].branco {
            background-color: gray;
        }
    </style>
</head>
<body>
    <div class="urna">
        <form action="votos.php"id="votoform"method="GET">
        <Input type="hidden" id="voto"name="voto"value="<?php echo $id?>">
        <Input type="hidden" id="voto"name="id"value="<?php echo $id?>">
        </form>
        <div id="tela" class="tela">--</div>

        <div class="botoes">
            <input type="submit" value="1" onclick="digitar(1)">
            <input type="submit" value="2" onclick="digitar(2)">
            <input type="submit" value="3" onclick="digitar(3)">
            <input type="submit" value="4" onclick="digitar(4)">
            <input type="submit" value="5" onclick="digitar(5)">
            <input type="submit" value="6" onclick="digitar(6)">
            <input type="submit" value="7" onclick="digitar(7)">
            <input type="submit" value="8" onclick="digitar(8)">
            <input type="submit" value="9" onclick="digitar(9)">
            <input type="submit" value="0" onclick="digitar(0)">
            <input type="submit" value="Branco" class="branco" onclick="votarBranco()">
            <input type="submit" value="Corrige" class="corrige" onclick="corrigir()">
            <input type="submit" value="Confirma" class="confirma" onclick="confirmar()">
        </div>
    </div>

    <script>

        let voto = "";
        function digitar(num) {
            if (voto.length < 2) {
                voto += num;
                document.getElementById('tela').innerText = voto;
            }
        }

        function corrigir() {
            voto = "";
            document.getElementById('tela').innerText = "--";
        }

        function votarBranco() {
            voto = "Branco";
            document.getElementById('tela').innerText = voto;
        }

        function confirmar() {
            if (voto === "") {
                alert("Nenhum voto registrado.");
            } else {
                alert("Voto confirmado: " + voto);
                document.getElementById('voto').value = voto;
                document.getElementById("votoform").submit();
                corrigir();  // Limpa a tela após confirmação
            } 

           
        }
    </script>
    <form action="votos.php" id="votoform" method="get">
        <Input type="hidden" id="voto"name="voto">
    </form>

</body>
</html>