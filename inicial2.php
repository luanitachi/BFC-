<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }
        .tudo {
            width: 100%;
            height: 100vh;
            background-color: blueviolet;
           
        }
        .corpo {
            background-color: white;
            display: block;
            margin-left: auto;
            margin-right: auto;
            top: 20%;
            position: relative;
            border-radius: 10px;
            padding: 5px;
            box-shadow: black 2px 2px 1px 20px;
            text-align: center;
            min-width: 280px;
            max-width: 800px;
            height: 400px;
            width: 40%;
            

        }
        p {
            font-family: verdana;
            font-weight: bold;
        }
        .img {
            background: url("water.png");
            background-size: cover;
            margin-left: auto;
            margin-right:auto;
            top: 10%;
            position: relative;
            width: 200px;
            height:200px;
            
            
        }

        

        
    </style>
</head>
<body>
    <div class="tudo">
<a href="https://mercadocotacao.com/dolar-hoje/" id="USD" title="Cotação do Dólar Americano Hoje" name="mercado_cotacao">Dólar Hoje</a><script async src="https://mercadocotacao.com/money/mercadocotacao.js"></script>
<a href="https://mercadocotacao.com/euro-hoje/" id="EUR" title="Cotação do Euro Hoje" name="mercado_cotacao">Euro Hoje</a><script async src="https://mercadocotacao.com/money/mercadocotacao.js"></script>
<a href="https://mercadocotacao.com/peso-argentino-hoje/" id="ARS" title="Cotação do Peso Argentino Hoje" name="mercado_cotacao">Peso Hoje</a><script async src="https://mercadocotacao.com/money/mercadocotacao.js"></script>
<a href="https://mercadocotacao.com/bitcoin-hoje/" id="BTC" title="Cotação do Bitcoin Hoje" name="mercado_cotacao">Bitcoin</a><script async src="https://mercadocotacao.com/money/mercadocotacao.js"></script>

    <div class="corpo">

    <?php
        include 'hg_finance.php';
        $HGFinance = new HGFinance('acf4050f');
        $finance = $HGFinance->get();
        $dolar = $finance["currencies"]["USD"]["buy"];
    ?>
        
    <?php
        

        if (isset($_GET["bfc"])) {
            $bfc = $_GET["bfc"];
        }
        else {
            $bfc = "Valor não informado";
        }

        if (isset($_GET["valorbfc"])) {
            $valor = $_GET["valorbfc"];
        }
        else {
            $valor = "Valor não informado";
        }
        if ($bfc=$_GET["bfc"]) {
            $soma= $bfc * $valor;
        }
        else {
            $soma= "Os valores não foram informados";
        }
        if ($bfc=$_GET["bfc"]) {
            echo "<p>Você tem ". $bfc. " BFC, ao vender tudo por U$". $valor. " você tera U$". $soma. "</p>"; 
        }
        else {
            echo "<p>Os valores não foram informados </p>";
        }
        echo "<hr color=black <br>";
        if ($bfc=$_GET["bfc"]) {
            $real = $soma * $dolar;
        }
        else {
            $real = "Os valores não foram informados";
        }
        if ($bfc=$_GET["bfc"]) {
            echo "<p>O valor convertido para real de acordo com a cotação do dolar é de R$". number_format($real,2,",","."). "</p>"; 
        }
        else {
            echo "<p>Os valores não foram informados</p>"; 
        } 
        echo "<form action=inicial.html method=get>
        <input type=submit value=Voltar></form>";
        
        
         
    ?>
    <div class="img">

    </div>
    </div>
    </div>
    
    <form action="" method="get"></form>
</body>
</html>