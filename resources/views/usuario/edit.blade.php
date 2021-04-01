<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>  

</head>

<body>
    <div class="container">
        {{-- Início do Cabeçalho --}}
        <div class="row mt-2">
           
        </div>
        {{-- Final do Cabeçalho --}}

        {{-- Inicio do Corpo --}}
        <div class="row mt-2">
        <div class="row">
                <h1>Editar Usuario</h1>  
            </div>  

            </div> 
            <div class="row">
            <form method="POST" action="{{ route('salvarEdicao') }}">
                    @csrf
                    {{-- mb : margin-bottom --}}
                    <input type="hidden" name = 'id' value="{{$usuario->id}}">
                    <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome Completo:</label>
                                    <input type="text" class="form-control" id="nomeImput" name="nome" value="{{$usuario->nome}}">
                                </div>
                    </div>
                    
                    <div class="mb-3">  
                                    <label for="exampleFormControlInput1">Data de Nascimento:</label>
                                    <input type="date" class="form-control" id="dataImput" name="data_nascimento" value="{{$usuario->data_nascimento}}" >
                    </div>         

                    <div class="mb-3">  
                                    <label for="exampleFormControlInput1">Senha:</label>
                                    <input type="password" class="form-control" id="senhaImput" name="senha" value="{{$usuario->senha}}">
                    </div> 
                    <div class="mb-3">  
                                    <label for="exampleFormControlInput1">Matricula:</label>
                                    <input type="number" class="form-control" id="matriculaImput" name="matricula" value="{{$usuario->matricula}}">
                    </div> 

                    <button  type="submit" class="btn btn-primary">Salvar Mudanças</button>
                    </form>
            </div>     


        </div>

        