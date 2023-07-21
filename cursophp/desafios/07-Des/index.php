<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <main>
        <?php 
            $salario= $_GET["salario"] ??0;
            $min= 1380;
            $total= intdiv($salario, $min) ??0;
            //ou tambem usa $total= $salario/$min ??0 ;
            
        ?>
        <article>
            <h1>Informe seu salario</h1>
             <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="salario">Informe seu Salario:</label>
                <input type="number" name="salario" id="salario" value="<?=$salario?>">
                <input type="submit" value="Calcular">
            </form>
            <?php echo "<p>Considerando que o salario minimo é de <strong>".number_format($min,2,",",".")."</strong></p>";?>
        </article>
        <article>
            <h1>Resultado final</h1>
            <?php  
                echo "Quem recebe um salario de ".number_format($salario, 2,",",".")." ganha <strong>".number_format($total,0)." salario minimo </strong>+ R$ ".$salario%$min.".";
            ?>
        </article>
    </main>
</body>
</html>