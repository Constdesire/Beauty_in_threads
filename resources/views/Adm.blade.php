<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Painel de Administração</title>
    <style>
        body {
            background-color: #FFEAD5;
        }
        .title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-top: 2rem;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 2rem;
        }
        .button {
            background-color: #8B4513;
            color: white;
            padding: 20px 40px;
            font-size: 1.75rem;
            text-align: center;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
        }
        .button img {
            display: block;
            margin: 0 auto 10px;
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
        <a class="mr-auto text-3xl font-bold leading-none" href="#">
            <img class="h-12 navbar-logo" alt="logo" src="img/Logo.png">
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-pink-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm text-black-600 hover:text-gray-500" href="welcome.blade.php">Home</a></li>
            <li><a class="text-sm text-black-600 hover:text-gray-500" href="welcome.blade.php/#Serviços">Nossos Serviços</a></li>
            <li><a class="text-sm text-black-400 hover:text-gray-500" href="welcome.blade.php/#Sobre">Sobre Nós</a></li>
            <li><a class="text-sm text-black-400 hover:text-gray-500" href="welcome.blade.php/#Contato">Contato</a></li>
            <li><a class="text-sm text-black-400 hover:text-gray-500" href="AgendamentoCad.blade.php">Horários Marcados</a></li>
        </ul>
    </nav>
    <div class="container mt-5">
        <h1 class="title">Painel de Administração</h1>
        <div class="button-container">
            <a href="" class="button">
                <img src="https://img.icons8.com/ios-filled/50/000000/conference-call.png" alt="Icone Funcionário">
                Gerenciar Funcionários
            </a>
            <a href="ClienteEdit.blade.php" class="button">
                <img src="https://img.icons8.com/ios-filled/50/000000/user-group-man-man.png" alt="Icone Cliente">
                Gerenciar Clientes
            </a>
        </div>
    </div>
</body>

</html>
