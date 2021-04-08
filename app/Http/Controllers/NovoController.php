<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Usuario;
use App\models\Endereco;
class novoController extends Controller
{
    public function create()
    {
        return view ('createUsuarioEndereco');
    }
    public function save(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nome= $request->nome;
        $usuario->data_nascimento= $request->data_nascimento;
        $usuario->senha= $request->senha;
        $usuario->matricula= $request->matricula;
        $usuario->save();

        $endereco = new Endereco();
        $endereco->cep= $request->cep;
        $endereco->complemento= $request->complemento;
        $endereco->bairro= $request->bairro;
        $endereco->cidade= $request->cidade;
        $endereco->estado= $request->estado;
        $endereco->numero= $request->numero;
        $endereco->usuario_id= $usuario->id;
        $endereco->save();
        return redirect (route ('carregarlistEndereco'));

    }
}

