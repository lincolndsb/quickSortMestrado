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
    <div class="container vh-100">
        <div class="row d-flex align-items-center flex-column justify-content-center h-100">
            <div class="col-5">
                <div class="card text-center">
                    <h1 class="card-header h3">Escolha uma estrategia QuickSort:</h1>
                    <div class="card-body">
                        <button id="random" class="btn btn-primary btn-block">Randômico com distribuição uniforme</button>
                        <button id="index" class="btn btn-primary btn-block">Indexado como média de 3 valores</button>
                        <button id="achaPivo" class="btn btn-primary btn-block">Algoritmo AchaPivo</button>
                        <button id="median" class="btn btn-primary btn-block">Mediana da lista</button>
                    </div>
                </div>  
                <div id="result" class="alert alert-success mt-3" hidden></div>              
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>