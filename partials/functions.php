<?php 

//recupero i valori degli input
$passwordLength = $_GET["password_length"];
$numbersInput = $_GET["numbers"];
$lettersInput = $_GET["letters"];
$symbolsInput = $_GET["symbols"];
$repeatYes = $_GET["repeat_yes"];
$repeatNo = $_GET["repeat_no"];


function repetition($repeatInputNo, $repeatInputYes, $value, $array, $function){

    if(isset($repeatInputNo)){

        if(!in_array($value, $array)){
            $array[] = $value;

        }else{
            $array[] = $function;
        }

    }else{
        $array[] = $value;
    };

    return $array;
};

$arrayRandom = [];

$symbols = [
    '!', '@', '#', '$', '%', '^', '&', '*', '?', '_', '=', '+', '[', ']', '&',
];

//riempio l'array inizialmente vuoto con lettere e numeri casuali, in base a cosa sceglie l'utente
for($i = 0; $i < 20; $i++){

    $numero = rand(1, 9);
    $maiuscola = chr(64+rand(1,26));
    $minuscola = strtolower(chr(64+rand(1,26)));

    if(isset($numbersInput)){

        $arrayRandom = repetition($repeatNo, $repeatYes, $numero, $arrayRandom, rand(1, 9));
        // $arrayRandom[] = $numero;

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
for($i = 0; $i < $passwordLength; $i++){
    $array2[] = $arrayRandom[rand(1, 20)];
};

var_dump($array2);
var_dump($arrayRandom);

//trasformo il secondo array in una stringa: la password generata
$stringPassword = implode('', $array2);

?>