<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressão</title>
    <link rel="stylesheet" href="../style.css">
    <style>
      button {
        display: block;
        margin: 20px;
      }
    </style>
</head>
<body>
    <main>
        <pre>
          <article>
            <?php
              setcookie("Dia-da-semana","Quinta", time() + 3600);
  
              session_start();
              $_SESSION ["Teste"]= ["FUNCIONOU"];
  
              echo "<p>Superglobais GET</p> ";
              var_dump($_GET);
  
              echo"<p>Superglobais POST </p>";
              var_dump($_POST);
  
              echo "<p>Superglobais REQUEST</p>";
              var_dump($_REQUEST);
  
              echo"<p>Superglobal COOKIES</p>";
              var_dump($_COOKIE);
  
              echo"<p>Superglobal SESSION</p>";
              var_dump($_SESSION);

              echo"<p>Superglobal GLOBALS</p>";
              var_dump($GLOBALS);
            ?>
            <button><a onclick="javascript:history.go(-1)">Voltar</a></button>
          </article>
        </pre>
    </main>
</body>
</html>