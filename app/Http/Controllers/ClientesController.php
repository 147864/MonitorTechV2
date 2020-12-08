<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Http\Requests\ClienteRequest;

class ClientesController extends Controller{
    public function index(){
        $clientes = Clientes::orderBy('nome')->paginate(10);
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    public function create (){
        return view ('clientes.create');
    }

    public function store(ClienteRequest $request){ 
        $novo_cliente = $request->all();
        Clientes::create($novo_cliente);

        return redirect()->route('clientes');
    }

    public function destroy($id){
        try {
            Clientes::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id){
        $clientes = Clientes::find($id);
        return view('clientes.edit', compact('clientes'));
    }

    public function update(ClienteRequest $request, $id){
        Clientes::find($id)->update($request->all());
        return redirect()->route('clientes');
    }

}
