<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
    <style> 
    Body{
       font-family: 'Blinker', sans-serif;
    }
    </style>

</head>
<body>
     <div class="container">
     <div class="row mt-2">
       Cabeçalho
     </div>

     <div class="row mt-2">

      <div class="row">
      <h1>Calculadora</h1>
      </div>
       <form>
        <div class="mb-3">
         <label for="primeiroValor" class="form-label">Primeiro valor</label>
         <input type="number" class="form-control" id="primeiroValor"> 
        </div>
        <div class="mb-3">
         <label for="segundoValor" class="form-label">Segundo valor</label>
         <input type="number" class="form-control" id="segundoValor">
        </div>
        <button type="submit" class="btn btn-primary">somar</button>
       </form>
      </div>

     <div class="row mt-2">
        Rodapé
     </div>
    </div>
 </body>
</html>