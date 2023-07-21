<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Margem de lucro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Controle de Estoque</h1>
    </header>
  <main>
    <h2>Mercadorias</h2>
    
    <?php 
    //corote
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php
     //pinheirense
        $qtdpinh=$_POST["pinh"] ??0;
        $totalpinh=5.50*$qtdpinh;
        $lucpinh=($totalpinh/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Pinheirense</h3>
            <label for="pinh">Quantidade de venda: </label><br>
            <input type="number" name="pinh" id="pinh" value="<?=$qtdpinh?>" min="0" max="100" step="1">
            <input type="submit" value="calcua">
        </form>
            <p>Qtd vendida: <strong><?=$qtdpinh?></strong></p>
            <p>Lucro: <strong><?=$lucpinh?></strong></p>
            <p>total: <strong><?=$totalpinh?></strong></p>
     </article>
    
     <?php 
     //coca 2l
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php 
     //coca2.5l
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php 
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php 
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php 
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php 
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php 
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php 
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>
    
     <?php 
        $qtdcor=$_POST["cor"] ??0;
        $totalcor=5.50*$qtdcor;
        $luccor=($totalcor/100)*44 ??0;
    ?>
     <article>
         <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <h3>Corote</h3>
            <label for="cor">Quantidade de venda: </label><br>
            <input type="number" name="cor" id="cor" value="<?=$qtdcor?>" min="0" max="100" step="1">
        </form>
            <p>Qtd vendida: <strong><?=$qtdcor?></strong></p>
            <p>Lucro: <strong><?=$luccor?></strong></p>
            <p>total: <strong><?=$totalcor?></strong></p>
     </article>

  </main>    
</body>
</html>