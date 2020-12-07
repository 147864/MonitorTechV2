<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitoramentos;
use App\TipoVeiculos;
use App\Anomalias;
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
        $monitoramento = Monitoramentos::create($novo_monitoramento);
        
        if ($request->voltBateria >= 12 || $request->voltBateria < 13 ) {
            if($request->voltAlternador >= 12 || $request->voltAlternador < 13 ){
                $tipo_anomalia = 1;
            }else if($request->voltAlternador < 12){
                $tipo_anomalia = 3;
            }
            else if($request->voltAlternador > 13){
                $tipo_anomalia = 4;
            }
        }
        else if($request->voltBateria < 12) {
            $tipo_anomalia = 2;
        }
                
        Anomalias::create([
            'avariaBateria' => $request->voltBateria,
            'avariAlternador' => $request->voltAlternador,
            "veiculo_id" => $request->veiculo_id,
            'monitoramento_id' => $monitoramento->id,
            "tipoAnomalia_id" => $tipo_anomalia,
        ]);

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

    /*
        public function comparaMonitoradoComPadrao($request, $bateria, $alternador){
        $padraoBat = DB::table('tipoVeiculos')->where('name', 'Colheitadeira');
        return teste;
    }

    public function verificaAvaria(Request $voltBateria, $voltAlternador){
        $batMonitorada = $voltBateria->get('voltBateria');
        $altMonitorado = $voltAalternador->get('voltAalternador');
        
        $batPadrao = $bateria->get('bateria');
        $altPadrao = $alternador->get('alternador');

        if ($batPadrao == $batMonitorada || altPadrao == altMonitorado) {
            //gera anomalia com tipo de anomalias que está tudo bem
            //break ???;
        } elseif ($batPadrao < $batMonitorada || altPadrao == altMonitorado) {
            //gera anomalias com tipo de anomalias bateria com defeito alt ok
        } elseif ($batPadrao > $batMonitorada || altPadrao == altMonitorado) {
            //gera anomalias com tipo de anomalias bateria com defeito alt ok
        } elseif ($batPadrao == $batMonitorada || altPadrao < altMonitorado) {
            //gera anomalias tipo de anomalias bateria ok e defeito no alt
        } else($batPadrao == $batMonitorada || altPadrao > altMonitorado){
            //gera anomalias tipo de anomalias bateria ok e defeito no alt
        } 
            
        return redirect()->route('monitoramentos');
    }
    */

}
