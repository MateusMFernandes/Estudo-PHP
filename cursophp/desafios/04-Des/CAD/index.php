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
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'07-14-2023\'&@dataFinalCotacao=\'07-21-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

               $dados = json_decode(file_get_contents($url), true);
               $cotação = $dados ["value"][0] ["cotacaoCompra"];

               $valor = $_POST["numero"];
              
               $soma = $valor/$cotação;

               echo "<p>Seu R$ ". number_format($valor, 2, ",",".") ." equivalem a U$". number_format($soma, 2)." !</p>";
               echo "<p>Cotação fixa de R$$cotação informada diretamente do codigo</p>";


               echo "A cotação foi $cotação"
            ?>
            <p id="voltar"><a id="botao" href="javascript:history.go(-1)"> ⬅️ Voltar</a></p>
   </article>
</body>
</html>