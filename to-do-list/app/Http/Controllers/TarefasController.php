<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tarefas;


class TarefasController extends Controller

{
 
    public function view(){
        $tarefas = Tarefas::orderBy('id','DESC')->paginate('10');
    
        return view('Tarefas',compact('tarefas'));
    }

    public function store(Request $req){
         
        try{
            Tarefas::create($req->only([
                                            'nomeTarefa' => $req->nomeTarefa,
                                            'dataTermino' => $req->dataLimite,
                                            'descricao'  => $req->descricao
                                            ]));
            
            return redirect()->back()->with('success', 'Tarefas cadastrado com sucesso!');
        }catch(Exception $e){
            return response()->json([
                'status' =>true,
                'message' => 'Error!'
            ],400);
        }

    }
}

