<?php
    $text = "Hai mai lodato il Sole, Cortigiana?";
    $forbidden = $_GET["forbidden"];
    $censoredText = str_replace($forbidden, "***" ,$text);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhP Censor</title>
    </head>

    <body>
        <header>
            <h1><?= ($text) ?></h1>
            <h2>lunghezza:<?= strlen($text) ?></h2>
            <form action="" method="get">
                <input type="text" name="forbidden">
                <button type="submit">Censor</button>
            </form>
            <h1><?= ($censoredText) ?></h1>
            <h2>lunghezza:<?= strlen($censoredText) ?></h2>
        </header>        
    </body>
</html>