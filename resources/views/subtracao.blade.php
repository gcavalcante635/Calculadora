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
     <center> <h1>Calculadora online</h1> <center>
     </div>

     <div class="row mt-2">

      <div class="row">
       <h1>Calculadora</h1> 
      </div>

      <div class="row">
      <form method="POST" action="{{ route('subtrair') }}">
       @csrf
        <div class="mb-3">
         <label for="primeiroValor" class="form-label">Primeiro valor</label>
         <input type="number" class="form-control" id="primeiroValor" name="valor1">
        </div>
        <div class="mb-3">
         <label for="segundoValor" class="form-label">Segundo valor</label>
         <input type="number" class="form-control" id="segundoValor" name="valor2">
        </div>
        <button type="submit" class="btn btn-primary">Subtrair</button>
       </form>
      </div>
      </div>

     <div class="row mt-2">
     <center> Todos os direitos reservados - Guilherme Marinho de Araujo Cavalcante - 21/03/2021 <center>
     </div>
    </div>
</body>
</html>