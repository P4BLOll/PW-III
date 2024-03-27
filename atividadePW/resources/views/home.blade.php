<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ route('style')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('etec-removebg-preview.png')}}" alt="Bootstrap" width="100" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end w-100" id="navbarNavDropdown">
        <ul class="navbar-nav fs-5 gap-5" >
            <li class="nav-item">
            <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Quem Somos?</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Notícias</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="row">
    <img src="{{ asset('image-21-1.webp')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            Column
            </div>
            <div class="col">
            Column
            </div>
            <div class="col">
            Column
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>