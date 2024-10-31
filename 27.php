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
        <h1>Exercicio 27</h1>
        <div class="row">
            <div class="col-4">
                <form action="27_resposta.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">digite a primeira nota</label>
                        <input type="number" class="form-control" name="nota1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">digite a segunda nota</label>
                        <input type="number" class="form-control" name="nota2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">digite a terceira nota</label>
                        <input type="number" class="form-control" name="nota3">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">digite a quarta nota</label>
                        <input type="number" class="form-control" name="nota4">
                    </div>
                    <p></p>
                    <button type="submit" class="btn btn-primary">enviar</button>
                </form>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
</body>
