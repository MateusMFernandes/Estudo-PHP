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
        <article>
            <h1>Informe seu salário</h1>
              <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="salario">Salário (R$):</label>
                <input type="number" name="salario" id="salario" value="<?=$salario?>">
                <input type="submit" value="Calcular">
              </form>  
    </main>
</body>
</html>