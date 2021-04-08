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
            <th scope="col">Cep: </th>
            <th scope="col">Estado: </th>
            <th scope="col">Cidade: </th>
            <th scope="col">Complemento: </th>
            <th scope="col">bairro: </th>
            <th scope="col">Numero: </th>
            <th scope="col">Proprietario: </th>
            <th scope="col">Ações: </th>
            
          </tr> 
        </thead>
        <tbody>
              @foreach ($enderecos as $item)
             <tr> 
            <td scope ="row">{{$item->cep}}</td>
            <td scope ="row">{{$item->estado}}</td>
            <td scope ="row">{{$item->cidade}}</td>
            <td scope ="row">{{$item->complemento}}</td>
            <td scope ="row">{{$item->bairro}}</td>
            <td scope ="row">{{$item->numero}}</td>
            <td scope ="row">{{$item->usuario->nome}}</td>
            <td scope ="row">
                <a href ="{{route('editarEndereco', $item->id)}}">Editar</a>
                <a href ="{{route('excluirEndereco', $item->id)}}">Excluir</a>
              
              
            </td>
            

          </tr>
          @endforeach
        </tbody>
      </table>
    
  </body>
  </html>