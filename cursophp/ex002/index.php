<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento em PHP</title>
</head>
<body>
    <h1> Exemplos de Php</h1>
    <?php 
        date_default_timezone_set("America/Sao_paulo");
        echo "Hoje é dia ". date("d/M/Y");
        echo " A hora atual é ". date(" G:i:s T");
    ?>
</body>
</html>