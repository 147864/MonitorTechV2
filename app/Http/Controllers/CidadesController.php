<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidades;
use App\Http\Requests\CidadeRequest;

class CidadesController extends Controller{

    public function index(Request $filtro){
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $cidades = Cidades::orderBy('nome')->paginate(10);    
        else 
            $cidades = Cidades::where('nome','like', '%'.$filtragem.'%')
                                    ->orderBy("nome")
                                    ->paginate(10)
                                    ->setpath('cidades?desc_filtro='+$filtragem);//A non-numeric value encountered ???? ta retornando essa m

        return view('cidades.index', ['cidades'=>$cidades]);
    }

    public function create (){
        return view ('cidades.create');
    }

    public function store(CidadeRequest $request){ //request encapsula os campos recebidos do formulário para enviar para o banco
        $nova_cidade = $request->all();
        Cidades::create($nova_cidade);

        return redirect()->route('cidades');
    }

    public function destroy($id){
        try {
            Cidades::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id){
        $cidades = Cidades::find($id);
        return view('cidades.edit', compact('cidades'));
    }

    public function update(CidadeRequest $request, $id){
        Cidades::find($id)->update($request->all());
        return redirect()->route('cidades');
    }

}
