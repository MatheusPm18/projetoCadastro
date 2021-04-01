<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Concluido</title>
</head>
<body>
    <div class="row">
        <h1>Usuario Salvo com Sucesso!!</h1>
    </div>
    <div class = "row">
        <div class="col-mds-2">CEP: {{$endereco->cep}}</div>
      
    </div>
    <div class = "row">
        <div class="col-mds-2">Complemento: {{$endereco->complemento}}</div>
       
    </div>
    <div class = "row">
        <div class="col-mds-2">Bairro: {{$endereco->bairro}}</div>
      
    </div>
    <div class = "row">
        <div class="col-mds-2">Estado: {{$endereco->estado}}</div>
      
        </div>
    <div class = "row">
        <div class="col-mds-2">Cidade: {{$endereco->cidade}}</div>
      
    </div>
    </div>

</body>
<div class="row mt-2">
               <center> Todos os Direitos Reservador a Matheus Pereira Melo - 25/03/2021 </center>
        </div>
</html> 