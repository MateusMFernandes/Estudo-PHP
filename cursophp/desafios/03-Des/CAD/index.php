<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Numero</title>
    <style>
        p#voltar {
            margin: 15px 0px;
            
        }
        a#botao {
            color: #5e044c;
            padding: 10px 100px;
            background-color: gold;
            font-weight: bold;
            font-size: 1em;
            cursor: pointer;
            width: 48%;
            border-radius: 5px;
            text-decoration: none;

        }
        a#botao:hover {
            color: gold;
            background-color: #5e044c;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.466);
        }
    </style>
</head>
<body>
   <article>
       <h1>Conversor de moeda v1.0</h1>
            <?php
                $valor = $_POST["numero"];
                $dolar = "5.22";
                $soma = $valor/$dolar;

                echo "<p>Seu R$ ". number_format($valor, 2, ",",".") ." equivalem a U$". number_format($soma, 2)." !</p>";
                echo "<p>Cotação fixa de R$$dolar informada diretamente do codigo</p>";
            ?>
            <p id="voltar"><a id="botao" href="javascript:history.go(-1)"> ⬅️ Voltar</a></p>
   </article>
</body>
</html>