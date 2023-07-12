<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <style>
        div#resul {
            margin-right: 445px;
            margin-top: 3px;
            display: inline-block;
            float: right;
            font-weight: bold;
        }
        article {
            padding-bottom: 40px;
        }
        p {
            margin-right: 20px;
            display: inline-block;
            font-weight: bold;
        }
        p#ver {
            margin-right: 5px;
            padding-right: 10px;
        }
        div#resto{
            float: left;
            margin-top: 5px;
            margin-left: 12px;
        }
    </style>
</head>
<body>
    <main>
        <?php 
            $divisor = $_POST["divisor"] ?? 0;
            $dividendo = $_POST["dividendo"] ?? 0;
            $divisao= $dividendo/$divisor ?? 0;

        ?>
        <article>
            <h1>Anatomia de uma Divisão</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>"  method="post">
                <label for="dividendo">Dividendo: </label>
                <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">

                <label for="divisor">Divisor: </label>
                <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
                
                <input type="submit" value="Calcular">
            </form>
        </article>
        <article>
            <?php 
                echo"<p id='ver'>$dividendo</p><p>$divisor</p>";
                echo "<div id='resul'>".number_format($divisao,)."</div>";
                echo"<div id='resto'>".$dividendo%$divisor."</div>";
                
            ?>
        </article>
    </main>
</body>
</html>