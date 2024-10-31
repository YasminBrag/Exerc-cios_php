<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media <= 4.9) {

    $texto = '<div class="alert alert-danger" role="alert">reprovado';
} elseif (($media >= 5.0) && ($media <= 6.9)) {

    $texto = '<div class="alert alert-warning" role="alert">recuperação';
} else {
    $texto = '<div class="alert alert-success" role="alert">aprovado';
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
                <h1>Exercicio 27</h1>
                <p>
                    <?php
                    echo $texto
                    ?>
                </p>
            </div>
            <a href="27.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>