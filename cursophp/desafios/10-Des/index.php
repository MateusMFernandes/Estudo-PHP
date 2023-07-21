<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <main>
        <?php 
            $ano=$_GET["ano"] ??0;
            $atual=$_GET["atual"]??0;
            $idade = $atual-$ano ??0;
        ?>
        <article>
            <h1>Calculando sua idade</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="ano">Em que ano vocé nasceu ?</label>
                <input type="number" name="ano" id="ano" value="<?=$ano?>" min="1900" max="<?=date("Y")-1?>">
                <label for="atual">Quer saber sua idade em que ano ? (Atualmente estamos em <?=date("Y")?>)</label>
                <input type="number" name="atual" id="atual" value="<?=date("Y")?>" min="<?=date("Y")?>">
                <input type="submit" value="Calcular sua idade">
            </form>
        </article>
        <article>
            <h1>Resultado</h1>
            <?php 
                echo"Quem nasceu em $ano vai ter $idade anos em $atual!";
            ?>
        </article>
    </main>
</body>
</html>