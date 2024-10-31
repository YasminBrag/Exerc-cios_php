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
        <h1>Exercicio 26</h1>
        <div class="row">
            <div class="col-4">
                <form action="26_resposta.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">digite o primeiro numero</label>
                        <input type="number" class="form-control" name="numero1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">digite o segumdo numero</label>
                        <input type="number" class="form-control" name="numero2">
                        <p></p>
                        <button type="submit" class="btn btn-primary">enviar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
