<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CadastroController extends Controller
{
    public function formulario(Request $request)
    {  
        $nome = $request->nome; 
        $data = $request->data; 
        $senha = $request->senha;
        $matricula = $request->matricula;

        return view('mostrarCadastro', compact('nome', 'data', 'senha', 'matricula'));

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
        return view ('listUsuario');
    }
}