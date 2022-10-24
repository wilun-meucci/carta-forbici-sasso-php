<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
</head>
<body>
    <?php
        $choseStr = '
        <form action="game.php" method="get">
            <label for="sasso"> sasso</label>
                <input type="radio" name="tipo" id="sasso" value="sasso">
            <label for="forbici"> forbici</label>
                <input type="radio" name="tipo" id="forbici" value="forbici">
            <label for="carta"> carta</label>
                <input type="radio" name="tipo" id="carta" value="carta">
            <input type="submit" value="Gioca">
        </form>';

        session_start();
        if($_SESSION["turno"] != 0)
        {
            $nome = $_SESSION["nome"];
            $turno = $_SESSION["turno"];
            $tipo = $_GET["tipo"];
            if (10> $turno)
            {
                pritInfo();

                
                echo $choseStr;
            }
            else {
                
                echo "Partita terminata";
                if
            }

            
            
            
        }
        else {
            $nome = $_GET["nome"];
            pritInfo();
            echo $choseStr;
            $_SESSION["nome"] = $nome;
            
        }


        function pritInfo() {

            if ($_GET["nome"])
            {
                $nome = $_GET["nome"]; 
                $maxTurni = $_GET["maxTurni"];
                echo " <p>Giocatore: $nome</p>";
                echo "<br>Max tentativi: $maxTurni";
            }
            else 
            {
                $turno = $_SESSION["turno"];
                $nome = $_SESSION["nome"];
                $tipo = $_GET["tipo"];
                $pcTipo  = generatePc();
                $_SESSION["pcTipo"] =$pcTipo ;
                echo "
                <h2>Turno: $turno</h2>
                <p>$nome ha giocato: $tipo <br> PC ha giocato: $pcTipo</p>";
                printResult();
            }
            $_SESSION["turno"] = $_SESSION["turno"]  +1;
          }
        function generatePc()
        {
            $n = rand(1,3);
            echo $n;
            if ($n ==1) {
                return "sasso";
            }
            else if($n ==2)
            {
                return "forbici";
            }
            else 
            {
                return "carta";
            }
        }
        function printResult()
        {
            $pcTipo = $_SESSION["pcTipo"];
            $tipo = $_GET["tipo"];
            $nome = $_SESSION["nome"];
            if( ($pcTipo == $tipo))
            {
                echo "<br> Pareggio!!";
            }
            else if ($tipo =="sasso")
            {
                if ($pcTipo == "carta")
                {
                    echo "<br> Ha vinto il PC!!"; 
                }
                else 
                {
                    echo "<br> Ha vinto $nome";
                    $_SESSION["win"] = $_SESSION["win"] +1;
                }
            }
            else if ($tipo =="forbici")
            {
                if ($pcTipo == "sasso")
                {
                    echo "<br> Ha vinto il PC!!"; 
                }
                else 
                {
                    echo "<br> Ha vinto $nome";
                    $_SESSION["win"] = $_SESSION["win"] +1;
                }
            }
            else if ($tipo =="carta")
            {
                if ($pcTipo == "forbici")
                {
                    echo "<br> Ha vinto il PC!!"; 
                }
                else
                {
                    echo "<br> Ha vinto $nome";
                    $_SESSION["win"] = $_SESSION["win"] +1;
                }
            }
        }
    ?>

   
</body>
</html>