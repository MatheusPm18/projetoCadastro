<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Endereço</title>
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
                <h1>Editar Endereço</h1>  
            </div>  

            </div> 
<div class="row">
            <form method="POST" action="{{ route('salvarEndereco') }}">
                    @csrf
                    <input type="hidden" name = 'id' value="{{$endereco->id}}">
                    <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Complemento:</label>
                                    <input type="text" class="form-control" id="nomeInput" name="complemento" value="{{$endereco->complemento}}"> 
                                </div>
                    </div>
                    <div class="mb-3">  
                                    <label for="exampleFormControlInput1">Cep:</label>
                                    <input type="text" class="form-control" id="cepInput" name="cep" value="{{$endereco->cep}}">
                    </div> 
                    <div class="mb-3">  
                                    <label for="exampleFormControlInput1">Estado:</label>
                                    <input type="text" class="form-control" id="estadoInput" name="estado" value="{{$endereco->estado}}">
                    </div> 

                    <div class="mb-3">  
                                    <label for="exampleFormControlInput1">Cidade:</label>
                                    <input type="text" class="form-control" id="cidadeImput" name="cidade" value="{{$endereco->cidade}}">
                    </div> 

                    <div class="mb-3">  
                                    <label for="exampleFormControlInput1">Bairro:</label>
                                    <input type="text" class="form-control" id="dataInput" name="bairro" value="{{$endereco->bairro}}" >
                    </div> 

                    <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Numero:</label>
                                    <input type="number" class="form-control" id="nomeInput" name="numero" value="{{$endereco->numero}}" >
                                </div>
                    </div>


                    <button  type="submit" class="btn btn-primary">Finalizar</button>
                    </form>
            </div>     