<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MENU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     
</head>
<body>
        <div class="container">
        {{-- Início do Cabeçalho --}}
        <div class="row mt-2">
        <center> <h1>Menu<h1> </center>
        </div>

        {{-- Inicio do Corpo --}}
        <div class="row mt-3">
                <a href="{{ route('carregarCadastro') }}"  class="btn btn-primary">Cadastrar</a>
        </div>  

        <div class="row mt-3">
                <a href="{{ route('carregarlistusuario') }}"  class="btn btn-primary">Lista de Usuarios</a>
        </div>  
        <div class="row mt-3">
                <a href="{{ route('carregarEndereco') }}"  class="btn btn-primary">Cadastrar Endereços</a>
        </div>  
        <div class="row mt-3">
                <a href="{{ route('carregarlistEndereco') }}"  class="btn btn-primary">Lista de Endereços</a>
        </div>  

        
            

        <div class="row mt-2">
               <center> Todos os Direitos Reservador a Matheus Pereira Melo - 25/03/2021 </center>
        </div>


        </div>