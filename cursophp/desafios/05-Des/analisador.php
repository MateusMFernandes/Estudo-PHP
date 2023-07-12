<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <article>
        <h1>Resultado do numero</h1>
        <?php 
          $numero = $_GET["numero"] ?? 0;
          $int = (int) $numero;
          $fra = $numero - $int;

          echo "<p>Analisando o número <strong>".number_format($numero, 3, ",",".")."</strong> informado pelo usuário</p>";
          echo "<p>O numero inteiro é <strong>".number_format($int, 0,",")."</strong></p>";
          echo "<p>O numero querado é <strong>".number_format($fra,3) ."</strong></p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </article>
</body>
</html> 