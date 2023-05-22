<?php 

//recupero i valori degli input
$passwordLength = $_GET["password_length"];
$numbersInput = $_GET["numbers"];

$arrayRandom = [];

//riempio l'array inizialmente vuoto con lettere e numeri casuali, in base a cosa sceglie l'utente
for($i = 0; $i < 20; $i++){

    if(isset($numbersInput)){

        $numero = rand(1, 9);
        $arrayRandom[] = $numero;

    }else{

        $maiuscola = chr(64+rand(1,26));
        $minuscola = strtolower(chr(64+rand(1,26)));
        $numero = rand(1, 9);
    
        $arrayRandom[] = $maiuscola;
        $arrayRandom[] = $minuscola;
        $arrayRandom[] = $numero;
    }

};

$array2 = [];

//creo un secondo array che contiene elementi random del primo array. Questo array è lungo quanto sceglie l'utente
for($i = 0; $i < $passwordLength; $i++){
    $array2[] = $arrayRandom[rand(1, 20)];
};

var_dump($array2);
var_dump($arrayRandom);

//trasformo il secondo array in una stringa: la password generata
$stringPassword = implode('', $array2);
echo $stringPassword;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>

    <div>

        <form action="index.php" method="GET">
            <input type="number" name="password_length">

            <div>
                <label for="">Numeri</label>
                <input type="checkbox" name="numbers">
            </div>

            <button type="submit">invia</button>
        </form>

    </div>

</body>
</html>