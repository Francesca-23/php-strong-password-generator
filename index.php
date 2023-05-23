<?php 

include __DIR__ . '/partials/functions.php';

?>


<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-info">

    <div class="container w-50 bg-info-subtle p-4 rounded-4 mt-5">

        <h1 class="text-center">Strong password generator</h1>
        <h2 class="text-center mb-5">Genera una password sicura</h2>

        <form action="index.php" method="GET">
            <div class="d-flex align-items-center w-50 mb-3">
                <label for="" class="me-4">Lunghezza password:</label>
                <input type="number" class="form-control w-25" max="15" min="5" name="password_length">
            </div>

            <div class="form-check">
                <label class="form-check-label" for="">Numeri</label>
                <input type="checkbox" class="form-check-input" name="numbers">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="">Lettere</label>
                <input type="checkbox" class="form-check-input" name="letters">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="">Simboli</label>
                <input type="checkbox" class="form-check-input" name="symbols">
            </div>

            <div class="d-flex align-items-center mt-3">
                <p>Consenti ripetizioni di uno o più caratteri:</p>

                <div class="ms-4">
                    <div class="form-check">
                        <label class="form-check-label" for="">si</label>
                        <input type="radio" class="form-check-input" name="repeat" value="si">
                    </div>

                    <div class="form-check">
                        <label class="form-check-label" for="flexRadio2">no</label>
                        <input type="radio" class="form-check-input" name="repeat" value="no" id="flexRadio2">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info mt-2">invia</button>

        </form>

        <div class="mt-4">
            <p>La tua password è: <?php echo $stringPassword ?> </p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>