<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <style>
        table {
            width: 200px;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            text-align: center;
        }
        .divi{
            border-right: 1px solid black;
        }
        .res{
            border-top: 1px solid black;
        } 
    </style>
</head>
<body>
    <main>
        <?php 
            $divisor = $_POST["divisor"] ?? 1;
            $dividendo = $_POST["dividendo"] ?? 0;
            $divisao= intdiv($dividendo, $divisor) ?? 0;

        ?>
        <article>
            <h1>Anatomia de uma Divisão</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>"  method="post">
                <label for="dividendo">Dividendo: </label>
                <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">

                <label for="divisor">Divisor: </label>
                <input type="number" name="divisor" id="divisor" value="<?=$divisor?>" min="1">
                
                <input type="submit" value="Calcular">
            </form>
        </article>
        <article>
            <h1>O estrutura da divisão</h1>
            <table>
                <tr>
                    <td class="divi"><?="$dividendo";?></td>
                    <td><?="$divisor";?></td>
                </tr>
                <tr>
                    <td class="divi"><?=$dividendo%$divisor;?></td>
                    <td class="res"><?=$divisao;?></td>
                </tr>
            </table>
        </article>
    </main>
</body>
</html>