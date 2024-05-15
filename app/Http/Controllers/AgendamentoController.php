<?php

namespace App\Http\Controllers;
use App\Models\Agendamento;

use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function AgendamentoCad(Request $req){
        $agendamento = Agendamento::all();
        return view('AgendamentoCad')->with("agendamento", $agendamento);
    }

    public function adicionarA(Request $req){
        $agendamento = new Agendamento;
        $agendamento->Servico = $req->Servico;
        $agendamento->DataServico = $req->DataServico;
        $agendamento->Horario = $req->Horario;
        $agendamento->IdCliente = $req->IdCliente;
        $agendamento->IdFunc = $req->IdFunc;
    
        $agendamento->save();
        return redirect()->back();
    }

    public function editarA(Request $req){
        $agendamento = Agendamento::find($req->id);
        return view('editar')->with("agendamento", $agendamento);
    }

    public function atualizarA(Request $req){
        $agendamento = Agendamento::find($req->id);
        $agendamento->update(
            [
               "Servico" => $req->Servico,
               "DataServico" => $req->DataServico,
               "Horario" => $req->Horario,
               "IdCliente" => $req->IdCliente,
               "IdFunc"=>$req->IdFunc
            ]);
        return redirect()->back();
        
    }

    public function excluirA(Request $req){
        $agendamento = Agendamento::find($req->id);
        $agendamento->delete();
        return redirect()->back();
    }
}
