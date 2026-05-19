<?php
$id = $_GET['id'];
?>



<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="cabecalho">

</div>
<header><img src="fturna/tse.png"></header>
<body>
    <div>

        <!--termino partes da urna-->

        <img src="fturna/tela.jpg" alt="">
        <img class="topo" src="fturna/topo.jpg" alt="">
        <img class="fxdir" src="fturna/faixaDir.jpg" alt="">
        <img class="abx1" src="fturna/abaixoTec.jpg" alt="">

        <!--termino partes da urna-->
        <form action="votos.php" id="votoform" method="GET">
            <Input type="hidden" id="voto" name="voto" value="<?php echo $id ?>">
            <Input type="hidden" id="voto" name="id" value="<?php echo $id ?>">
        </form>

        <div class="sc1">


            <input type="submit" value="1" onclick="digitar(1); digito()">
            <input type="submit" value="2" onclick="digitar(2); digito()">
            <input type="submit" value="3" onclick="digitar(3); digito()">
            <input type="submit" value="4" onclick="digitar(4); digito()">
            <input type="submit" value="5" onclick="digitar(5); digito()">
            <input type="submit" value="6" onclick="digitar(6); digito()">
            <input type="submit" value="7" onclick="digitar(7); digito()">
            <input type="submit" value="8" onclick="digitar(8); digito()">
            <input type="submit" value="9" onclick="digitar(9); digito()">

        </div>
        <div class="sc2">
            <input class="btnzero" type="submit" value="0" onclick="digitar(0); digito()">
        </div>
        <div class="sc3">
            <input type="submit" value="Branco" class="branco" onclick="votarBranco();efetiva()">
            <input type="submit" value="Corrige" class="corrige" onclick="corrigir(); digito()">
            <input type="submit" value="Confirma" class="confirma" onclick="confirmar();efetiva()">
        </div>


        <div class="sc4">

        </div>

    </div>

</body>



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
            corrigir(); // Limpa a tela após confirmação
        }
    }

    function digito() {
        var digitar = new Audio('audio/numeros.mp3');
        digitar.play()

    }

    function efetiva() {

        var efetiva = new Audio('audio/confirma.mp3');
        efetiva.play()

    }
</script>
<form action="votos.php" id="votoform" method="get">
    <Input type="hidden" id="voto" name="voto">
</form>


<div class="menutela">VOTAR</div>

<div id="tela" class="tela">--</div>


<style>
    .cabecalho{
        background-color: #1b305a;
        width: 100%;
        height: 50px;
        border-radius: 5px;
    }
    .topo {
        position: absolute;
        margin-top: -3px;
    }

    .fxdir {
        position: absolute;
        margin-top: 32px;
        margin-left: 274px
    }

    .abx1 {
        position: absolute;
        margin-top: 544px;
    }



    .sc1 {
        width: 275px;
        height: 150px;
        position: absolute;
        margin-top: -350px;
        margin-left: 642px;
        background-color: black;



        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;


    }


    .sc2 {
        width: 275px;
        height: 50px;
        position: absolute;
        margin-top: -200px;
        margin-left: 642px;
        background-color: black;



        display: flex;

        justify-content: space-around
    }

    .btnzero {
        width: 85px;
        margin-top: 5px;
    }

    .sc3 {
        width: 275px;
        height: 50px;
        position: absolute;
        margin-top: -110px;
        margin-left: 642px;
        background-color: black;



        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    .sc3 input[type="submit"].confirma {
        background-color: green;

    }

    .sc3 input[type="submit"].corrige {
        background-color: orange;
    }

    .sc3 input[type="submit"].branco {
        background-color: gray;
    }



    .sc4 {
        width: 275px;
        height: 40px;
        position: absolute;
        margin-top: -150px;
        margin-left: 642px;
        background-color: black;



        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;


    }




    .tela {
        width: 50px;
        height: 50px;
        background-color: white;
        color: black;
        font-size: 32px;
        margin-left: 100px;
        text-align: center;
        line-height: 50px;
        margin-top: -300px;
        border-radius: 5px;
        position: absolute;
    }

    .menutela {
        width: 50px;
        height: 50px;

        color: black;
        font-size: 32px;
        margin-left: 100px;
        text-align: center;
        line-height: 50px;
        margin-top: -350px;
        border-radius: 5px;
        position: absolute;
    }
</style>

</html>