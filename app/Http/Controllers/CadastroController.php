<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Usuario;
use App\models\Endereco;
class CadastroController extends Controller
{
    public function formulario(Request $request)
    { 
        $usuario = new Usuario();
        $usuario->nome= $request->nome;
        $usuario->data_nascimento= $request->data_nascimento;
        $usuario->senha= $request->senha;
        $usuario->matricula= $request->matricula;
        $usuario->save();
        return view('usuario.show', compact('usuario'));

    }



    public function listar()
    {
       $usuarios = usuario::all();
       return view('usuario.lista');
    }


    public function cadastro()
    {
        return view ('formCadastro');
    }
    public function menu()
    {
        return view ('menu');
    }

    public function mostrarCadastro()
    {
        return view ('mostrarCadastro');
    }
    public function listUsuario()
    {
        $usuarios = usuario::all();
        return view('usuario.lista', compact ('usuarios'));
    }

    public function editarUsuario($id){
        $usuario = Usuario::where('id', $id)->first();
        return view('usuario.edit', compact('usuario'));
    }
    public function salvarEdicao(Request $request){
        $usuario = Usuario::where('id', $request->id)->first();
        $usuario->nome= $request->nome;
        $usuario->data_nascimento= $request->data_nascimento;
        $usuario->senha= $request->senha;
        $usuario->matricula= $request->matricula;
        $usuario->update();
        return redirect (route ('carregarlistusuario'));
    }

    public function excluirUsuario($id){
       Usuario::destroy($id);
       return redirect (route ('carregarlistusuario'));
    }

    public function formularioEndereco(Request $request)
    { 
        $endereco = new Endereco();
        $endereco->cep= $request->cep;
        $endereco->complemento= $request->complemento;
        $endereco->bairro= $request->bairro;
        $endereco->cidade= $request->cidade;
        $endereco->estado= $request->estado;
        $endereco->numero= $request->numero;
        $endereco->save();
        return view('enderecos.showEndereco', compact('endereco'));

    }

    public function cadastrarEndereco()
    {
        return view ('formCadastroEndereco');
    }
    public function listEndereco()
    {
        $enderecos = Endereco::all();
        return view('enderecos.ListaEnderecos', compact ('enderecos'));
    }
    public function excluirEndereco($id){
        Endereco::destroy($id);
        return redirect (route ('carregarlistEndereco'));
     }

     
    public function editarEndereco($id){
        $endereco = Endereco::where('id', $id)->first();
        return view('enderecos.editEndereco', compact('endereco'));
    }
    
    public function salvarEndereco(Request $request){
        $endereco = Endereco::where('id', $request->id)->first();
        $endereco ->cep= $request->cep;
        $endereco ->complemento= $request->complemento;
        $endereco ->bairro= $request->bairro;
        $endereco ->cidade= $request->cidade;
        $endereco ->estado= $request->estado;
        $endereco ->numero= $request->numero;
        $endereco ->update();
        return redirect (route ('carregarlistEndereco'));
    }
}

