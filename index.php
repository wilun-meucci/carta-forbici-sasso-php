<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta, Forbici, Sasso</title>
</head>
<?php
session_start();
$_SESSION["turno"] = 0;
echo $_SESSION["turno"];
echo "diocane";

?>
<body>

    <form action="game.php" method="get">
        <label for="nome">Giocatore: </label>
            <input type="text" name="nome" id="nome" >
        <label for="nome">Max tentativi: </label>
            <input type="number" name="maxTurni" id="maxTurni" min="1" max="10">
        <input type="submit" value="Gioca">
    </form>
</body>
</html>
