<?php

$idade = $_POST['idade'];

if ($idade >= 18) {

    $texto = '<div class="alert alert-success" role="alert">
    pode votar';
} else {
    $texto = '<div class="alert alert-danger" role="alert">
    não pode votar';
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
                <h1>Exercicio 18</h1>
                <p>
                    <?php
                    echo $texto
                    ?>
                </p>
                <a href="18.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>