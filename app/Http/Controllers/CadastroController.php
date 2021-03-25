<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CadastroController extends Controller
{
    public function formulario(Request $request)
    {  
        $nome = $request->nome; 
        $email = $request->email; 
        $data = $request->data; 
        $senha = $request->senha;
        $matricula = $request->matricula;

        return view('mostrarCadastro', compact('nome', 'email', 'data', 'senha', 'matricula'));

    }
    public function cadastro()
    {
        return view ('formCadastro');
    }
}