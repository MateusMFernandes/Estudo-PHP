<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos cadastro</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado dos Cadastro</h1>
    </header>
    <main>
        <article>
            <?php
                $nome = $_POST ["nome"];
                $sobrenome = $_POST ["snome"];
                $email = $_POST ["email"];
                echo "<p>Olá, $nome $sobrenome seja bem vindo ao meu site, seu email é, $email";
            ?>
            <p><a href="javascript:history.go(-1)">Clique aqui para voltar á pagina anterior</a></p>
        </article>
    </main>
</body>
</html>