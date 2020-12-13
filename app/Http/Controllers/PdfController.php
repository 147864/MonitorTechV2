<?php

namespace App\Http\Controllers;
use App\Clientes;
use App\Veiculos;
use App\TipoVeiculos;
use App\TipoAnomalias;
use App\Monitoramentos;
use App\Anomalias;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function clientes(){
        $clientes = Clientes::all();
        
        $pdf = PDF::loadView('relatorios\cliente', compact('clientes'));
        return $pdf->setPaper('a4')->stream('clientes.pdf');
    }

    public function tipoVeiculos(){
        $tipoVeiculos = TipoVeiculos::all();
        
        $pdf = PDF::loadView('relatorios\tipoVeiculos', compact('tipoVeiculos'));
        return $pdf->setPaper('a4')->stream('tipoVeiculos.pdf');
    }

    public function veiculos(){
        $veiculos = Veiculos::all();
        
        $pdf = PDF::loadView('relatorios\veiculos', compact('veiculos'));
        return $pdf->setPaper('a4')->stream('veiculos.pdf');
    }

    public function tipoAnomalias(){
        $tipoAnomalias = tipoAnomalias::all();
        
        $pdf = PDF::loadView('relatorios\tipoAnomalias', compact('tipoAnomalias'));
        return $pdf->setPaper('a4')->stream('tipoAnomalias.pdf');
    }

    public function monitoramentos(Request $request){
        $monitoramento = $request->all();
        
        $veiculo = $request->veiculo_id;
        $data_ini = $request->dt_ini;
        $data_fim = $request->dt_fim;
        
        $query = DB::select(
        'select m.id, v.nome, m."voltBateria", m."voltAlternador", m.created_at
        from monitoramentos m 
        inner join veiculos v on m.veiculo_id = v.id 
        where veiculo_id = ? and m.created_at between ? and ?',[$veiculo,$data_ini,$data_fim]);

        $pdf = PDF::loadView('relatorios\monitoramentos', ['query'=>$query]);
        return $pdf->setPaper('a4')->stream('monitoramentos.pdf');
        
    }

    public function anomaliasCliente(Request $request){
        $anomalia = Anomalias::all();

        $cliente = $request->cliente_id;
        $veiculo = $request->veiculo_id;
        $data_ini = $request->dt_ini;
        $data_fim = $request->dt_fim;

        $query = DB::select('select a.id, c.nome as cliente, v.nome, a."avariaBateria", a."avariAlternador", a.created_at, t.laudo
        from anomalias a
        left join veiculos v ON a.veiculo_id = v.id
        inner join clientes c on v.cliente_id = c.id
        inner join "tipoAnomalias" t on a."tipoAnomalia_id" = t.id
        and c.id = ? and a.created_at between ? and ?',[$cliente,$data_ini,$data_fim]);
        //dd($query);

        $pdf = PDF::loadView('relatorios\anomaliasCliente', ['query'=>$query]);
        return $pdf->setPaper('a4')->stream('anomalias.pdf');
    }

    public function anomaliasVeiculo(Request $request){
        $anomalia = Anomalias::all();

        $cliente = $request->cliente_id;
        $veiculo = $request->veiculo_id;
        $data_ini = $request->dt_ini;
        $data_fim = $request->dt_fim;

        $query = DB::select('select a.id, c.nome as cliente, v.nome, a."avariaBateria", a."avariAlternador", a.created_at, t.laudo
        from anomalias a
        left join veiculos v ON a.veiculo_id = v.id
        inner join clientes c on v.cliente_id = c.id
        inner join "tipoAnomalias" t on a."tipoAnomalia_id" = t.id
        and v.id = ? 
        and a.created_at between ? and ?',[$veiculo,$data_ini,$data_fim]);
        //dd($query);

        $pdf = PDF::loadView('relatorios\anomaliasVeiculo', ['query'=>$query]);
        return $pdf->setPaper('a4')->stream('anomalias.pdf');
    }
}
