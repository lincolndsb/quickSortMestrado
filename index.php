<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://i.postimg.cc/tCZPSp1G/matrix.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>QuickSort - Implementação</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="mt-5 mb-3 card text-center">
                    <h1 class="card-header h3">Escolha uma estrategia QuickSort:</h1>
                    <div class="card-body">
                        <button id="random" class="btn btn-primary btn-block">Randômico com distribuição uniforme</button>
                        <button id="index" class="btn btn-success btn-block">Indexado como média de 3 valores</button>
                        <button id="achaPivo" class="btn btn-danger btn-block">Algoritmo AchaPivo</button>
                        <button id="median" class="btn btn-info btn-block">Mediana da lista</button>
                    </div>
                </div>  
                <div id="result" class="alert alert-success mt-3" hidden></div>              
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <canvas id="timeGraph" class="mb-5" width="400" height="150" hidden></canvas>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.min.js" integrity="sha512-tOcHADT+YGCQqH7YO99uJdko6L8Qk5oudLN6sCeI4BQnpENq6riR6x9Im+SGzhXpgooKBRkPsget4EOoH5jNCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>