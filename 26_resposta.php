<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if ($numero1 == $numero2) {

    $texto = '<div class="alert alert-primary" role="alert">os numeros são iguais';
} elseif ($numero1 < $numero2) {

    $texto = '<div class="alert alert-primary" role="alert"> o numero '.$numero1.' é menor que o '.$numero2;
} else {
    $texto = '<div class="alert alert-primary" role="alert"> o numero '.$numero1.' é maior que o '.$numero2;
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Exercicio 26</h1>
                <p>
                    <?php
                    echo $texto
                    ?>
                </p>
            </div>
            <a href="26.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>