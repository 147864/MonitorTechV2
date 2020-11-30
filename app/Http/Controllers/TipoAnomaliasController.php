<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoAnomalias;
use App\Http\Requests\TipoAnomaliaRequest;

class TipoAnomaliasController extends Controller{
    public function index(){
        $tipoanomalias = TipoAnomalias::orderBy('id')->paginate(6);
        return view('tipoanomalias.index', ['tipoanomalias'=>$tipoanomalias]);// NESSA LINHA VAI DAR MERDA
    }

    public function create (){
        return view ('tipoanomalias.create');
    }

    public function store(TipoAnomaliaRequest $request){ //request encapsula os campos recebidos do formulário para enviar para o banco
        $novo_tipoanomalia = $request->all();
        TipoAnomalias::create($novo_tipoanomalia);

        return redirect()->route('tipoanomalias');
    }

    public function destroy($id){
        try {
            TipoAnomalias::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id){
        $tipoanomalias = TipoAnomalias::find($id);
        return view('tipoanomalias.edit', compact('tipoanomalias'));
    }

    public function update(TipoAnomaliaRequest $request, $id){
        TipoAnomalias::find($id)->update($request->all());
        return redirect()->route('tipoanomalias');
    }
}
