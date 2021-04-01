<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Usuario;
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
}