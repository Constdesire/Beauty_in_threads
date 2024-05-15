<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    <title>Cadastrar Cliente</title>
</head>
<body>
<div class="container">
  <div class="row align-items-start">
    <div class="col">
          <nav class="navbar navbar-expand bg-primary">
              <div class="container-fluid">
                  <a class="navbar-brand text-light" href="#" >Cadastrar Cliente</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                 <li class="nav-item">
                                  <a class="nav-link active text-light" aria-current="page" href="#">Cadastrar</a>
                                 </li>
                                    <li class="nav-item">
                                       <a class="nav-link text-light" href="#">Consultar</a>
                                    </li>
                               </ul>
                         </div>
                  </div>
            </div>
           <p> 
           <p align="left"><font size="5">Cadastrar -  Agendamento de Clientes</p></font>
           <p align="left"><font size="4">Sistema utilizado para agedamento de serviços</font></p>
           
<div class="container mt-5">
        <form method="POST" action="/adicionarCliente">
            @csrf
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Nome</label>
                    <input type="text" class="form-control" name="Nome" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2" >Data de Nascimento</label>
                    <input type="text" class="form-control" name="DataNasc" placeholder="XXXX/XX/XX" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">CPF</label>
                    <input type="text" class="form-control" name="CPF" placeholder="XXXX/XX/XX">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Telefone</label>
                    <input type="text" class="form-control" name="Telefone" placeholder="(XX)XXXXX-XXXX">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Endereco</label>
                    <input type="text" class="form-control" name="Endereco" placeholder="">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">CEP</label>
                    <input type="text" class="form-control" name="CEP" placeholder="XXXX/XX/XX">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" name="Email" placeholder="">
           </div>
           <button type="submit" class="btn btn-primary">Cadastrar</button> 
      </form>
</div>
</body>
</html>
