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
        <h1>Exercicio 18</h1>
        <div class="row">
            <div class="col-4">
                <form action="18_resposta.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">informe sua idade</label></label>
                        <input type="number" class="form-control" name="idade">
                        <div id="text" class="form-text">verificação de idade para votar</div>
                        <button type="submit" class="btn btn-primary">enviar</button>
                     </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
