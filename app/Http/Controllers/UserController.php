<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){}

    public function create(){}

    public function store(Request $request){}

    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}

    public function buscarCodigo(Request $request){
        $id_usuario = $request->input('codigo');
        $usuario = User::where('id', '=', $id_usuario)->get(['id','name', 'email']);
        if($usuario->isEmpty()){
            return 0;
        } else{
            return response(json_encode($usuario), 200)->header('Content-type', 'text/plain');
        }


    }


}
