<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <style>
        li {
            margin-left: 25px;
        }
        img {
            height: 50px;
            margin-top: 5px;
        }
        input {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <?php 
    //usar int ou floor
        $valor=$_GET["valor"] ??0;
        $resto= $valor;
        $cem= (int)($resto/ 100);
        $resto %=100;
        $cinq = (int)($resto/50);
        $resto%=50;
        $dez=intdiv($resto, 10);
        $resto%=10;
        $cin= intdiv($resto, 5);
        
    ?>
    <main>
        <article>
            <h1>Caixa Eletronico</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="valor">Qual valor voce deseja sacar (R$):</label>
                <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>">
                <p>Notas disponivel: R$100, R$50, R$10, R$5. </p>
                <input type="submit" value="Sacar">
            </form>
        </article>
        <article>
            <h1>Saque de R$ <?=number_format($valor, 2, ",",".")?> realizado.</h1>
            <p>O caixa eletronico vai te entregar as seguntes notas:</p>
            <ul>
                <li><img src="imagem/100-reais.jpg" alt="img"> x <?=$cem?></li>
                <li><img src="imagem/50-reais.jpg" alt="img"> x <?=$cinq?></li>
                <li><img src="imagem/10-reais.jpg" alt="img"> x <?=$dez?></li>
                <li><img src="imagem/5-reais.jpg" alt="img"> x <?=$cin?></li>
            </ul>
        </article>
    </main>
</body>
</html>