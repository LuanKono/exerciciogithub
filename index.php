<!DOCTYPE html>
<html>
    <head>
        <title>Exercicio PHP - Hello World</title>
    </head>
    <style>
        #hello {
            color: blue;
            font-family: "Comic Sans MS", "Comic Sans", cursive;
            font-weight: bold;
        }
    </style>
    <body>
        <?php
        $diretorio = __DIR__;
        require_once($diretorio . "\app.php");
        ?>
    </body>
</html>