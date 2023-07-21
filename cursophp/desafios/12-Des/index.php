<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <main>
        <?php 
            $tempo=$_GET["tempo"] ??0;
            $sobra= $tempo;

            $semana=intdiv($sobra, 604800);
            $sobra=$sobra%604800;

            $dias= intdiv($sobra, 86400);
            $sobra= $sobra%86400;

            $hora= intdiv($sobra,3600);
            $sobra= $sobra%3600;

            $minutos= intdiv($sobra, 60);
            $segundos=($sobra%60)

        ?>
        <article>
            <h1>Calcladora de tempo</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
             <label for="tempo">Qual é o total de segundos?</label>
             <input type="number" name="tempo" id="tempo" value="<?=$tempo?>">
             <input type="submit" value="Calcular">
            </form>
        </article>
        <article>
            <h1>Totalizando tudo</h1>
            <?php 
                echo"<p>Analisando o valor que foi digitado, <strong>".number_format($tempo, 0, ",",".")."</strong> segundos equivalem a um total de:</p>";
                echo "<p>".number_format($segundos,0)." segundos</p>";
                echo "<p>".number_format($minutos,0)." minutos</p>";
                echo"<p>".number_format($hora,0)." horas</p>";
                echo"<p> ".number_format($dias,0)." Dias</p>";
                echo"<p>".number_format($semana,0)." semanas </p>";

            ?>
        </article>
    </main>
</body>
</html>