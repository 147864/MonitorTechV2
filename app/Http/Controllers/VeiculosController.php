<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculos;
use App\Http\Requests\VeiculoRequest;

class VeiculosController extends Controller{
    public function index(){
        $veiculos = Veiculos::orderBy('nome')->paginate(10);
        return view('Veiculos.index', ['veiculos'=>$veiculos]);// NESSA LINHA VAI DAR MERDA
    }

    public function create (){
        return view ('veiculos.create');
    }

    public function store(VeiculoRequest $request){ //request encapsula os campos recebidos do formulário para enviar para o banco
        $novo_veiculo = $request->all();
        Veiculos::create($novo_veiculo);

        return redirect()->route('veiculos');
    }

    public function destroy($id){
        try {
            Veiculos::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id){
        $veiculos = Veiculos::find($id);
        return view('veiculos.edit', compact('veiculos'));
    }

    public function update(VeiculoRequest $request, $id){
        Veiculos::find($id)->update($request->all());
        return redirect()->route('veiculos');
    }

}
