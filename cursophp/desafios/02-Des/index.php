<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            background-color: blue;
        }
        article {
            background-color: white;
            width: 400px;
            height: 200px;
            margin: auto;
            margin-top: 30px;
            padding: 10px;
            border-radius: 5px;
        }
        h1 {
            margin: 10px;
        }
        p{
            margin-top: 30px;
        }
        button {
            display: block;
            text-decoration: none;
            padding: 10px;
            width: 380px;
            background-color: blue;
            color: white;
            margin-top: 5px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <article>
        <h1>Gerador de numeros aleatorios</h1>
          <?php 
             $min = 0;
             $max = 100;
             $gerar = mt_rand($min,$max);

             echo "<p>Gerador de numeros aleatorios entre 0 a 100...</p>";
             echo "<p>O numero gerado foi $gerar</p>";
          ?>
          <button onclick="javascript:document.location.reload()">Gerar Outro</button>
    </article>
</body>
</html>