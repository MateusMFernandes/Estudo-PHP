<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
         $valor1 = $_GET["valor1"] ??0;
         $valor2 = $_GET["valor2"] ??0;
        ?>
        <article>
            <h1>Soma de valores</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?> " method="get">
                <label for="valor1">Valor 01: </label>
                <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
                <label for="valor2">Valor 02:</label>
                <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
                <input type="submit" value="Enviar">
            </form>
            <h2>Resultado dos valor</h2>
               <?php 
                 $soma = $valor1+$valor2;
                 echo "A soma de $valor1+$valor2= $soma"; 
               ?>
        </article>
    </main>
</body>
</html>