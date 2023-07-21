<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <style>
        ul {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <main>
        <?php 
            $valor1 = $_POST["valor1"]?? 1;
            $peso1 = $_POST["peso1"] ?? 1;
            $valor2 = $_POST["valor2"] ?? 1;
            $peso2 = $_POST["peso2"] ?? 1;
            $totalsim = ($valor1+$valor2)/2 ?? 1;
            $totalpond= ($valor1*$peso1+$valor2*$peso2)/($peso1+$peso2) ??0;
        ?>
        <article>
            <h1>Médias Aritméticas</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <label for="valor1">1º Valor:</label>
                <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">

                <label for="peso1">1º Peso:</label>
                <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">

                <label for="valor2">2º Valor:</label>
                <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">

                <label for="peso2">2º Peso:</label>
                <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">

                <input type="submit" value="Calcular Médias">
            </form>
        </article>
        <article>
            <h1>Cálculo das Médias</h1>
            <?php 
                echo"<ul><li>A Média Aritmética simples entre os valores <strong>$valor1</strong> e <strong>$valor2</strong> é igual á <strong>".number_format($totalsim,2,",")."</strong></li>";
                echo"<li>A Média Aritmética ponderada entre os valores <strong>$peso1</strong> e <strong>$peso2</strong> é igual á <strong>".number_format($totalpond,2,",")."</strong></li>";
            ?>
        </article>
    </main>
</body>
</html>