<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>
        <?php

        echo $name = $_GET["name"];

        echo strlen($name);
        //  stampiamo a schermo cio che scriviamo nell'input
        // strlen serve per capire la lunghezza 
        ?> </h1>



    <?php

    $censor = $_GET["censor"];
    //prendo l'input censor
    $nuovaParola = ('');    
    // array dove pusho la parola censurata


    for ($i = 0; $i < strlen($censor); $i++) {

        $nuovaParola .= '*';
    }
    //ciclo per assegnare * a tutto la parola 

    echo $nuovaParola;
    // stampo la nuova parola censurata a schermo 

    ?>




</body>

</html>