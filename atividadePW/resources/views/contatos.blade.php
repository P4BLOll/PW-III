<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/contatos.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ETEC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid align-center px-5">
        <img class="p-2" src="{{ asset('imgs/logo-etec-removebg-preview.png') }}" width="100" height="90">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center fs-4" id="navbarNav">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobrenos">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="noticias">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contatos">Contatos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container">
    <h1 class="text-dark">Caso precise contatar a escola, utilize um destes seguintes contatos:</h1>
    <div class="row justify-content-around">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('imgs/download.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">Cordenação de Cursos</p>
                    <p class="card-text">(11)2045-4018</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('imgs/download (1).jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">Direção</p>
                    <p class="card-text">(11)2045-4016</p>
                    <p class="card-text">(11)2045-4011</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>