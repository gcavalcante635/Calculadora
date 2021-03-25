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
<center> <h1>Página Inicial</h1> <center> 
</div>


<div class="row mt-3">
            </div> 
            <div class="row">

                <a  href="{{ route('carregarSoma') }}" class="btn btn-primary">Somar</a>
                    </div>
           
            <div class="row mt-2">

            <a  href="{{ route('carregarSubtração') }}" class="btn btn-primary">Subtrair</a>
                    </div>

            <div class="row mt-2">

            <a  href="{{ route('carregarMultiplicação') }}" class="btn btn-primary">Multiplicar</a>
            </div> 

            <div class="row mt-2">

            <a  href="{{ route('carregarDivisão') }}" class="btn btn-primary">Divisão</a>
            </div>             

<div class="row mt">
     <center> Todos os direitos reservados - Guilherme Marinho de Araujo Cavalcante - 21/03/2021 <center>
   </div>

</div>
</body>
</html>