<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php
    $matches = [
        [
            "Team1" => "Milan", 
            "Team2" => "Inter", 
            "Pt1" => 2, 
            "Pt2" => 0,
        ],
        [
            "Team1" => "Juventus", 
            "Team2" => "Torino", 
            "Pt1" => 3, 
            "Pt2" => 0,
        ], 
        [
            "Team1" => "Roma", 
            "Team2" => "Lazio", 
            "Pt1" => 1, 
            "Pt2" => 4,
        ], 
        [
            "Team1" => "Barcellona", 
            "Team2" => "Real Madrid", 
            "Pt1" => 2, 
            "Pt2" => 2,
        ], 
        [
            "Team1" => "Napoli", 
            "Team2" => "Palermo", 
            "Pt1" => 1, 
            "Pt2" => 2,
        ],  
    ];

    /* var_dump($matches); */
    for ($i=0; $i < count($matches); $i++) { 
        echo $matches[$i]["Team1"] . " " . "-" . " " . $matches[$i]["Team2"] . " " . "|" . " " . $matches[$i]["Pt1"] . " " . "-" . " " . $matches[$i]["Pt2"] . " /// ";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        
        
    </body>
</html>

<!-- php -S localhost:9999 -->