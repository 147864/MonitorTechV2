<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anomalias;
use App\Http\Requests\AnomaliaRequest;

class AnomaliasController extends Controller{
    public function index(){
        $anomalias = Anomalias::orderBy('id')->paginate(10);
        return view('anomalias.index', ['anomalias'=>$anomalias]);// NESSA LINHA VAI DAR MERDA
    }

    public function relFiltros(){
        return view ('anomalias.relFiltros');
    }

    public function create (){
        return view ('anomalias.create');
    }

    public function store(AnomaliaRequest $request){ //request encapsula os campos recebidos do formulário para enviar para o banco
        $nova_anomalia = $request->all();
        Anomalias::create($nova_anomalia);

        return redirect()->route('anomalias');
    }

    public function destroy($id){
        try {
            Anomalias::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id){
        $anomalias = Anomalias::find($id);
        return view('anomalias.edit', compact('anomalias'));
    }

    public function update(AnomaliaRequest $request, $id){
        Anomalias::find($id)->update($request->all());
        return redirect()->route('anomalias');
    }
}
