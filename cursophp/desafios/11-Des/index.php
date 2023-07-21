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
           $valor=$_GET["valor"]??0;
           $porcentagem=$_GET["porcentagem"]??0;
           $total= ($valor/100)*$porcentagem+$valor??0;
        ?>
        <article>
            <h1>Reajustador de preço</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="valor">Preço do Produto (R$):</label>
                <input type="number" name="valor" id="valor" value="<?=$valor?>" step="0.01">
                <label for="porcentagem">Qual sera o percentual de reajuste? (<strong><span id="por">?</span>%</strong>)</label>
                <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>">
                <input type="submit" value="Calcular">
            </form>
        </article>
        <article>
            <h1>Resultado do reajuste</h1>
            <?php 
                echo "O produto que custava ".number_format($valor,2,",",".")." com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>".number_format($total,2,",",".")."</strong> a partir de agora.";
            ?>
        </article>
    </main>
    <script>
        mudaValor()
        function mudaValor(){
            por.innerText = porcentagem.value;
        }
    </script>
</body>
</html>