<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"> 
     <div class="row">
      <div class="col-4">
       <h1>exercicio 17</h1>
        <form action="7_resposta.php" method="post">
         <div class="mb-3"> 
          <label for="numero" class="form-label">Digite a velocidade do carro</label>
           <input type="text" class="form-control" name="velocidade" id="numero">
            <div id="emailHelp" class="form-text">Se velocidade acima de 80km/h cobrar R$5,00 por km</div>
             </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
               </form>
        </div>
     </div>
</div>
    <script src="js/js/bootstrap.bundle.min.js"></script>
</body>
</html>