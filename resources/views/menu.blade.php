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
            <form method="soma" action="{{ route('carregarSoma') }}">
                        
                    <button type="submit" class="btn btn-primary">Somar</button>
                    </form>
            </div>
            <div class="row mt-2">
            <form method="subtracao" action="{{ route('carregarSubtração') }}">
                        
                    <button type="submit" class="btn btn-primary">Subtrair</button>
                    </form>
            </div>
            <div class="row mt-2">
            <form method="multiplicacao" action="{{ route('carregarMultiplicação') }}">
                        
                    <button type="submit" class="btn btn-primary">Multiplicar</button>
                    </form>
            </div> 
            <div class="row mt-2">
            <form method="divisao" action="{{ route('carregarDivisão') }}">
                        
                    <button type="submit" class="btn btn-primary">Dividir</button>
                    </form>
            </div>             

<div class="row mt">
     <center> Todos os diretos reservados - Guilherme Marinho de Araujo Cavalcante - 2021 <center>
   </div>

</div>
</body>
</html>