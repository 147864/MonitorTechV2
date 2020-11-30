<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoVeiculos;
use App\Http\Requests\TipoVeiculoRequest;

class TipoVeiculosController extends Controller{
    public function index(){
        $tipoVeiculos = TipoVeiculos::orderBy('nome')->paginate(6);
        return view('tipoVeiculos.index', ['tipoVeiculos'=>$tipoVeiculos]);// NESSA LINHA VAI DAR MERDA
    }

    public function create (){
        return view ('tipoVeiculos.create');
    }

    public function store(TipoVeiculoRequest $request){ //request encapsula os campos recebidos do formulário para enviar para o banco
        $novo_tipoVeiculos = $request->all();
        TipoVeiculos::create($novo_tipoVeiculos);

        return redirect()->route('tipoVeiculos');
    }

    public function destroy($id){ try {
        TipoVeiculos::find($id)->delete();
        $ret = array('status'=>200, 'msg'=>"null");
    } catch (\Illuminate\Database\QueryException $e) {
        $ret = array('status'=>500, 'msg'=>$e->getMessage());
    } catch (\PDOException $e) {
        $ret = array('status'=>500, 'msg'=>$e->getMessage());
    }
    return $ret;
    }

    public function edit($id){
        $tipoVeiculos = TipoVeiculos::find($id);
        return view('tipoVeiculos.edit', compact('tipoVeiculos'));
    }

    public function update(TipoVeiculoRequest $request, $id){
        TipoVeiculos::find($id)->update($request->all());
        return redirect()->route('tipoVeiculos');
    }

}
