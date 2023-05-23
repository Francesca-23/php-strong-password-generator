<?php 

//recupero i valori degli input
$passwordLength = $_GET["password_length"];
$numbersInput = $_GET["numbers"];
$lettersInput = $_GET["letters"];
$symbolsInput = $_GET["symbols"];
$repeat = $_GET["repeat"];


$arrayRandom = [];

$symbols = [
    '!', '@', '#', '$', '%', '^', '&', '*', '?', '_', '=', '+', '[', ']', '&',
];

//riempio l'array inizialmente vuoto con lettere e numeri casuali, in base a cosa sceglie l'utente
for($i = 0; $i < 15; $i++){

    $numero = rand(0, 9);
    $maiuscola = chr(64+rand(1,26));
    $minuscola = strtolower(chr(64+rand(1,26)));

    if(isset($numbersInput)){

        $arrayRandom[] = $numero;

    }
    if(isset($lettersInput)){

        $arrayRandom[] = $maiuscola;
        $arrayRandom[] = $minuscola;
    }
    if(isset($symbolsInput)){

        $arrayRandom[] = $symbols[$i];
    }

};


$array2 = [];

//creo un secondo array che contiene elementi random del primo array. Questo array è lungo quanto sceglie l'utente

if($repeat == "no"){
        
    while (count($array2) < $passwordLength) {
        $randomElement = $arrayRandom[rand(0, count($arrayRandom) - 1)];

        if (!in_array($randomElement, $array2)) {
            $array2[] = $randomElement;
        }
    };

}elseif($repeat == "si"){

    while (count($array2) < $passwordLength) {
        $array2[] = $arrayRandom[rand(0, count($arrayRandom) - 1)];

    };
};

//trasformo il secondo array in una stringa: la password generata
$stringPassword = implode('', $array2);

?>