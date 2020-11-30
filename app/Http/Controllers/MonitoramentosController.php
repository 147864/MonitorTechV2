<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitoramentos;
use App\Http\Requests\MonitoramentoRequest;

class MonitoramentosController extends Controller{
    public function index(){
        $monitoramentos = Monitoramentos::orderBy('id')->paginate(6);
        return view('monitoramentos.index', ['monitoramentos'=>$monitoramentos]);// NESSA LINHA VAI DAR MERDA
    }

    public function create (){
        return view ('monitoramentos.create');
    }

    public function store(MonitoramentoRequest $request){ //request encapsula os campos recebidos do formulário para enviar para o banco
        $novo_monitoramento = $request->all();
        Monitoramentos::create($novo_monitoramento);

        return redirect()->route('monitoramentos');
    }

    public function destroy($id){
        try {
            Monitoramentos::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id){
        $monitoramentos = Monitoramentos::find($id);
        return view('monitoramentos.edit', compact('monitoramentos'));
    }

    public function update(MonitoramentoRequest $request, $id){
        Monitoramentos::find($id)->update($request->all());
        return redirect()->route('monitoramentos');
    }

    public function verificaAvaria(Request $voltagemBateria, $voltagemAlternador){
        
        return avaria;
    }
}
