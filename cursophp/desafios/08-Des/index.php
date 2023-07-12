<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <style>
        ul {
            margin-left: 40px;
        }
    </style>
</head>
<body>
    <main>
        <?php 
            $numero= $_GET["numero"]??0;
            $cubica= $numero *3*3*3;
        ?>
        <article>
            <h1>Inorme um numero</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get"> 
                <label for="numero">Número:</label>
                <input type="number" name="numero" id="numero" value="<?=$numero?>">
                <input type="submit" value="Calcular Raizes">
            </form>
        </article>
        <article>
            <h1>Resultado final</h1>
            <?php 
                echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
                echo "<ul><li>A sua raiz quadrada é <strong>".number_format(sqrt($numero),3,",")."</strong></li>";
                echo "<li>A sua raiz cubica é <strong>".number_format($cubica,0,",")."</strong></li></ul>";
            ?>
        </article>
    </main>
</body>
</html>