<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Cadastre-se</title>
    <style>
        body {
            background-color: #A36A4F;
        }
        .header-site {
            background-image: url('img/cad.png');
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color: #2f302f;
            padding: 12% 10%;
            box-sizing: border-box;
        }
        @media (max-width: 768px) {
            .header-site {
                padding: 20% 5%;
            }
        }
        @media (max-width: 480px) {
            .header-site {
                padding: 25% 3%;
            }
        }
    </style>
</head>
<body>
<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
    <a class="mr-auto text-3xl font-bold leading-none" href="#">
        <img class="h-12 navbar-logo" alt="logo" src="/img/Logo.png">
    </a>
    <div class="lg:hidden">
        <button id="navbar-burger" class="flex items-center text-pink-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
		<li><a class="text-sm text-black-600 hover:text-gray-500" href="welcome.blade.php">Home</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                </svg>
            </li>
            <li><a class="text-sm text-black-600 hover:text-gray-500" href="welcome.blade.php/#Serviços">Nossos serviços </a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                </svg>
            </li>
            <li><a class="text-sm text-black-400 hover:text-gray-500" href="welcome.blade.php/#Sobre">Sobre Nos</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                </svg>
            </li>
            <li><a class="text-sm text-black-400 hover:text-gray-500" href="welcome.blade.php/#Contato">Contato</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                </svg>
            </li>
            <li><a class="text-sm text-black-400 hover:text-gray-500" href="">Horários Marcados</a></li>
        </ul>
         <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="login.blade.php">Login</a>
    </nav>
<!--------->
<div id="navbar-menu" class="navbar-menu hidden relative z-50">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img class="h-12 lg:hidden" alt="logo" src="img/Logo.png">
            </a>
            <button id="navbar-close" class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1"><a class="block p-4 text-sm font-semibold text-black-600 hover:text-gray-500" href="welcome.blade.php">Home</a></li>
                <li class="mb-1"><a class="block p-4 text-sm font-semibold text-black-600 hover:text-gray-500" href="welcome.blade.php/#Serviços">Nossos Serviços</a></li>
                <li class="mb-1"><a class="block p-4 text-sm font-semibold text-black-600 hover:text-gray-500" href="welcome.blade.php/#Sobre">Sobre nós</a></li>
                <li class="mb-1"><a class="block p-4 text-sm font-semibold text-black-600 hover:text-gray-500" href="welcome.blade.php/#Contato">Contato</a></li>
                <li class="mb-1"><a class="block p-4 text-sm font-semibold text-black-600 hover:text-gray-500" href="#">Horários Marcados</a></li>
            </ul>
        </div>
        <p class="my-4 text-xs text-center text-gray-400">
            <span>Copyright © 2024</span>
        </p>
    </nav>
</div>

<!--<section class="header-site"></section>-->

<div class="flex items-center justify-center p-12">
    <div class="max-w-3xl w-full bg-white shadow-md rounded-lg flex">
        <!-- Form Section -->
        <div class="w-full lg:w-2/2 p-6">
    <h1 class="text-3xl font-semibold mb-6 text-black text-center">Editar Cliente</h1>
    <p class="my-4 text-center">Atualize as informações do cliente do Beleza em fios!</p>
    <form method="POST" action="/atualizarCL/{{$cliente ->id}}">
        @csrf
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Nome</label>
            <input type="text" class="form-control" name="Nome" value="{{ $cliente->Nome }}">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Data de Nascimento</label>
            <input type="text" class="form-control" name="DataNasc" value="{{ $cliente->DataNasc }}">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">CPF</label>
            <input type="text" class="form-control" name="CPF" value="{{ $cliente->CPF }}">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Telefone</label>
            <input type="text" class="form-control" name="Telefone" value="{{ $cliente->Telefone }}">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Endereço</label>
            <input type="text" class="form-control" name="Endereco" value="{{ $cliente->Endereco }}">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">CEP</label>
            <input type="text" class="form-control" name="CEP" value="{{ $cliente->CEP }}">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" name="Email" value="{{ $cliente->Email }}">
        </div>

        <button type="submit" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-800 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300" >Atualizar</button>
    </form>
</div>


<br><br><br><br>

<script>
    document.getElementById('navbar-burger').addEventListener('click', function () {
        document.getElementById('navbar-menu').classList.toggle('hidden');
    });

    document.getElementById('navbar-close').addEventListener('click', function () {
        document.getElementById('navbar-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>