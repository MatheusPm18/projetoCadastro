<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<meta charset="UTF-8"/>
<title>Usuarios Cadastrados</title>
</head>
<body>
    <center><table class="table">
        <thead>
          <tr> 
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Senha</th>
            <th scope="col">Matricula</th>
          </tr> 
        </thead>
        <tbody>
              @foreach ($usuarios as $item)
                  
             <tr> 
            <td scope ="row">{{$item->id}}</td>
            <td scope ="row">{{$item->nome}}</td>
            <td scope ="row">{{$item->data_nascimento}}</td>
            <td scope ="row">{{$item->senha}}</td>
            <td scope ="row">{{$item->matricula}}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
    
</body>
</html>