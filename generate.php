<?php

$testo = $_GET['testo'];
$censura = str_replace($testo,'', '***');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-around">
            <div>
                <h2 class="mb-3">senza censusa</h2>
                <h4>Caratteri usati <?php echo strlen($testo) ?></h4>
                <h6>Tuo paragrafo:</h6>
                <p> <?php echo $testo ?></p>
            </div>
            <div>
                <h2 class="mb-3">censurato</h2>
                <h4>Caratteri usati <?php echo strlen($testo) ?></h4>
                <h6>Tuo paragrafo:</h6>
                <p> <?php echo $censura ?></p>
            </div>
        </div>
    </div>
</body>

</html>