<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitoramentos;
use App\TipoVeiculos;
use App\Anomalias;
use App\Http\Requests\MonitoramentoRequest;

class MonitoramentosController extends Controller{
    public function index(){
        $monitoramentos = Monitoramentos::orderBy('id')->paginate(10);
        return view('monitoramentos.index', ['monitoramentos'=>$monitoramentos]);// NESSA LINHA VAI DAR MERDA
    }

    public function relFiltros(){
        return view ('monitoramentos.relFiltros');
    }

    public function create (){
        return view ('monitoramentos.create');
    }

    public function store(MonitoramentoRequest $request){ //request encapsula os campos recebidos do formulário para enviar para o banco
        $novo_monitoramento = $request->all();
        $monitoramento = Monitoramentos::create($novo_monitoramento);

        $ok = "ok";
        $ok = floatval($ok);
        
        if ($request->voltBateria >= 12 && $request->voltBateria < 14 ) {
            if($request->voltAlternador >= 12 && $request->voltAlternador < 14 ){
                $tipo_anomalia = 1;
                
                Anomalias::create([
                    'avariaBateria' => $ok,
                    'avariAlternador' => $ok,
                    "veiculo_id" => $request->veiculo_id,
                    'monitoramento_id' => $monitoramento->id,
                    "tipoAnomalia_id" => $tipo_anomalia,
                ]);
                
            }else if($request->voltAlternador < 12){
                $tipo_anomalia = 2;

                Anomalias::create([
                    'avariaBateria' => $ok,
                    'avariAlternador' => $request->voltAlternador,
                    "veiculo_id" => $request->veiculo_id,
                    'monitoramento_id' => $monitoramento->id,
                    "tipoAnomalia_id" => $tipo_anomalia,
                ]);
            }
            else if($request->voltAlternador > 13){
                $tipo_anomalia = 3;

                Anomalias::create([
                    'avariaBateria' => $ok,
                    'avariAlternador' => $request->voltAlternador,
                    "veiculo_id" => $request->veiculo_id,
                    'monitoramento_id' => $monitoramento->id,
                    "tipoAnomalia_id" => $tipo_anomalia,
                ]);
            }
        }
        if($request->voltBateria < 12) {
            if($request->voltAlternador >= 12 && $request->voltAlternador < 14){
                $tipo_anomalia = 4;
                Anomalias::create([
                    'avariaBateria' => $request->voltBateria,
                    'avariAlternador' => $ok,
                    "veiculo_id" => $request->veiculo_id,
                    'monitoramento_id' => $monitoramento->id,
                    "tipoAnomalia_id" => $tipo_anomalia,
                ]);
            } else if($request->voltAlternador < 12){
                $tipo_anomalia = 5;
                Anomalias::create([
                    'avariaBateria' =>$request->voltBateria,
                    'avariAlternador' =>$request->voltAlternador,
                    "veiculo_id" => $request->veiculo_id,
                    'monitoramento_id' => $monitoramento->id,
                    "tipoAnomalia_id" => $tipo_anomalia,
                ]);                
            }
        } 
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
}
