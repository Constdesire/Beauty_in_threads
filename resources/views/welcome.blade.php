<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Beauty in Threads</title>
    <style>
        body {
            background-color: #FFEAD5;
            font-family: 'Roboto', sans-serif;
        }
        .carousel {
            max-width: 2000px;
            margin: 0 auto;
        }
        .navbar-logo {
            height: 60px;
            max-height: 60px;
        }
        section {
            width: 100%;
            min-height: calc(100vh - (110vw/-12));
        }
        section:not(:last-child) * {
            margin-top: 0;
        }
        section:last-child {
            position: relative;
            margin-top: 0;
            padding-top: 0;
            min-height: 100vh;
            z-index: -1;
        }
        section:nth-child(1) {
            background-color: #A36A4F;
            color: #FFEAD5;
        }
        section:nth-child(2) {
            background-color: #FFEAD5;
            color: #A36A4F;
        }
        section:nth-child(3) {
            background-color: #A36A4F;
            color: #FFEAD5;
        }
       
        h1 {
            font-family: 'Roboto', sans-serif;
           
        }
        p {
            font-family: 'Roboto', sans-serif;
           
        }
    </style>
</head>
<body>
    <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
        <a class="mr-auto text-3xl font-bold leading-none" href="#">
            <img class="h-12 navbar-logo" alt="logo" src="img/Logo.png">
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text--600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm font-bold" style="color: #A36A4F;" href="#">Home</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                </svg>
            </li>
            <li><a class="text-sm text-black-600 hover:text-gray-500" href="#">Agendamento</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                </svg>
            </li>
            <li><a class="text-sm text-black-400 hover:text-gray-500" href="#">Horários Marcados</a></li>
            
        </ul>
    </nav>
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img class="h-12 lg:hidden" alt="logo" src="img/Logo.png">
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-black-600 hover:text-gray-500" href="#">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-black-600 hover:text-gray-500" href="#">Agendamento</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-black-600 hover:text-gray-500" href="#">Horários Marcados</a>
                    </li>

                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                </div>
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2024</span>
                </p>
            </div>
        </nav>
    </div>
    <div class="container-fluid text-center">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    </div>
   
    <div class="section-container">
        <section class="min-h-screen flex flex-col lg:flex-row justify-center items-center text-center px-4">
            <div class="w-full lg:w-1/2">
                <br>
                <h1 class="text-4xl lg:text-5xl xl:text-6xl">Nossos Serviços</h1>
                <br>
                <p class="text-lg lg:text-xl xl:text-2xl my-4">
                    Oferecemos uma ampla gama de serviços para atender todas as suas necessidades de beleza:
                    <br>
                    <br>
                    Cabelos: Corte, coloração, mechas, tratamentos capilares, escova, penteados para ocasiões especiais e muito mais.
                    <br>
                    Unhas: Manicure, pedicure, alongamento de unhas, nail art e tratamentos para unhas saudáveis.
                    <br>
                    Estética Facial: Limpeza de pele, hidratação, tratamentos anti-idade, design de sobrancelhas e maquiagem.
                    <br>
                    Estética Corporal: Massagens, drenagem linfática, depilação e tratamentos corporais para redução de medidas e celulite.
                </p>
            </div>
            <div class="w-full lg:w-1/2">
                <img src="img/servicos.png" class="w-full h-full object-cover" alt="Nossos Serviços">
            </div><br>
        </section>
        <section class="min-h-screen flex flex-col lg:flex-row justify-center items-center text-center px-4">
        <div class="w-full lg:w-1/2">
                <img src="img/sobre.png" class="w-full h-full object-cover" alt="Sobre Nós">
            </div>
            <div class="w-full lg:w-1/2">
                <h1 class="text-4xl lg:text-5xl xl:text-6xl">Sobre Nós</h1>
                <p class="text-lg lg:text-xl xl:text-2xl my-4">
                    Nós somos uma empresa dedicada a oferecer as melhores soluções em beleza e moda.
                    Nossa missão é proporcionar a todos os nossos clientes uma experiência única e personalizada, sempre buscando inovar e trazer as últimas tendências do mercado.
                </p>
            </div>
           
        </section>
        
        <section class="min-h-screen flex flex-col lg:flex-row justify-center items-center text-center px-4">
            <div class="w-full lg:w-1/2"><br>
                <h1 class="text-4xl lg:text-5xl xl:text-6xl">Localização e Contato</h1>
                <p class="text-lg lg:text-xl xl:text-2xl my-4">
                    Estamos localizados no coração da cidade, com fácil acesso e estacionamento disponível. Venha nos visitar e descubra como podemos transformar o seu visual e renovar sua autoestima.
                    <br>
                    <br>
                    Endereço: [Endereço do Salão]
                    <br>
                    Telefone: [Número de Telefone]
                    <br>
                    E-mail: [Endereço de E-mail]
                    <br>
                    Horário de Funcionamento: [Horário de Funcionamento]
                </p>
            </div>
            <div class="w-full lg:w-1/2">
                <img src="img/local.png" class="w-full h-full object-cover" alt="Localização e Contato">
            </div><br>
        </section>
    </div>
</body>
<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>
</html>
