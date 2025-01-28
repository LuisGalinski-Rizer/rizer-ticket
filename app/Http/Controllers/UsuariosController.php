<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsuariosController extends Controller {

    public function index() {
        $usuarios = User::get();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }


    public function create(){  
        return view('usuarios.add');
    }


    public function store(Request $request){
        $dados   = $request->all();        
        $usuario = New User;
        
        $usuario->name      = $dados['name'];
        $usuario->email     = $dados['email'];
        $usuario->password  = bcrypt($dados['password']);
        $usuario->telefone  = $dados['telefone'];
        $usuario->status     = $dados['status'];
        $usuario->tecnico     = $dados['tecnico'];
        $usuario->save();
        
        return redirect('usuarios');
    }

    public function show($id){
        $usuario = User::find($id); 
        return view('usuarios.show', ['usuarios' => $usuario]);
    }

    public function edit($id){
        $usuarios = User::find($id);
        return view('usuarios.edit', ['usuarios' => $usuarios]);
    }

    public function update(Request $request, $id){
        $dados = $request->all();
        $usuario = User::find($id);

        $usuario->name      = $dados["name"];
        $usuario->email     = $dados["email"];
        $usuario->password  = $dados["password"];
        $usuario->telefone  = $dados["telefone"];
        $usuario->tecnico   = $dados["tecnico"];
        $usuario->status    = $dados["status"];
        $usuario->save();

        return redirect('usuarios');
    }

    public function destroy($id){
        $usuario = User::find($id);
        $usuario->delete();

        return redirect('usuarios');
    }

}