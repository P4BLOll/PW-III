<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
    <img src="{{asset('imgs/image-21-1.webp')}}" class="img-fluid" width="100%" height="auto">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50"></div>
        <div class="position-absolute top-50 start-50 translate-middle bg-bs-light-text-emphasis p-4 rounded">
            <p class="h5 text-white opacity-50">ETEC ZONA LESTE</p>
            <p class="h1 text-white">Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</p>
        </div>
    </div>
    <div class="container">
        <div class="row" style="padding-top: 7rem;">
            <div class="col">
            <img src="{{asset('imgs/card1.webp')}}" class="rounded mx-auto d-block" height="360" width="550">
            </div>
            <div class="col" id="c1">
                <h1 id="title-c1">O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</h1>
                <p id="text-c1">Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e planos profissionais a todo momento em nossos pensamentos, numa busca constante pelo caminho que nos trará o melhor. Mas saiba que a ETEC Zona Leste conhece os seus anseios e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser assustador. Suas habilidades técnicas e profissionais podem ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos. Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!</p>
            </div>
        </div>

        <div class="row align-items-center"" style="padding-top: 15rem;">
            <div class="col" id="c1">
                <h1 id="title-c1">Excelência Educacional</h1>
                <p id="text-c1">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossas aulas são ministradas por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
            </div>
            <div class="col">
            <img src="{{asset('imgs/card2.webp')}}" class="rounded mx-auto d-block" height="360" width="550">
            </div>
        </div>

        <div class="row align-items-center"" style="padding-top: 15rem;">
            <div class="col">
            <img src="{{asset('imgs/card3.webp')}}" class="rounded mx-auto d-block" height="360" width="550">
            </div>
            <div class="col" id="c1">
                <h1 id="title-c1">Para Além da Sala de Aula</h1>
                <p id="text-c1">Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
            </div>
        </div>

        <div class="row align-items-center"" style="padding-top: 15rem;">
        <div class="col" id="c1">
                <h1 id="title-c1">Ambientes Favoráveis</h1>
                <p id="text-c1">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Ademais, nossa instituição é envolta em um grande jardim, com árvores de pequeno e médio porte, plantas e flores, provendo ao nosso corpo estudantil um ambiente mais acolhedor e aconchegante. Na ETEC Zona Leste, você encontrará um espaço favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
            </div>
            <div class="col">
            <img src="{{asset('imgs/card4.webp')}}" class="rounded mx-auto d-block" height="360" width="550">
            </div>
        </div>
    </div>
</body>
</html>