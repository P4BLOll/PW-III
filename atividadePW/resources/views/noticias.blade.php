<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/noticias.css') }}" rel="stylesheet">
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

<div class="position-relative">
    <img src="{{asset('imgs/noticias.webp')}}" class="img-fluid" width="100%" height="auto">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50"></div>
        <div class="position-absolute top-50 start-50 translate-middle bg-bs-light-text-emphasis p-4 rounded">
            <p class="h5 text-white opacity-50">NOTÍCIAS</p>
            <p class="h1 text-white">Fique por dentro de todas as notícias semanais, com informações úteis e curtiosidades</p>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/mainfrr.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Tecnologia</h5>
            <p class="card-text">Centro Paula Souza e IBM promovem live sobre mainframe nesta terça (9).</p>
            <a href="#" class="btn btn-danger">Saiba Mais</a>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/vesti.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Vagas</h5>
            <p class="card-text">Inscrições abertas para o Vestibulinho das Etecs do segundo semestre</p>
            <a href="#" class="btn btn-danger">Saiba Mais</a>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/est.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Não Perca</h5>
            <p class="card-text">Saiba como solicitar a isenção e a redução da taxa de inscrição do Vestibular das Fatecs</p>
            <a href="#" class="btn btn-danger">Saiba Mais</a>
        </div>
        </div>
        </div>
    </div>
</body>
</html>