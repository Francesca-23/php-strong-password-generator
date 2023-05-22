<?php 

include __DIR__ . '/partials/functions.php'

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
            <div>
                <label for="">Lettere</label>
                <input type="checkbox" name="letters">
            </div>
            <div>
                <label for="">Simboli</label>
                <input type="checkbox" name="symbols">
            </div>

            <div>
                <label for="">Consenti ripetizioni di uno o più caratteri</label>
                <label for="">si</label>
                <input type="checkbox" name="repeat_yes">
                <label for="">no</label>
                <input type="checkbox" name="repeat_no">
            </div>

            <button type="submit">invia</button>
        </form>

        <div>
            <p>La tua password è: <?php echo $stringPassword ?> </p>
        </div>

    </div>

</body>
</html>