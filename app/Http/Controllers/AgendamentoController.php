<?php

namespace App\Http\Controllers;
use App\Models\Agendamento;

use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function AgendamentoCad(Request $req){
        $agendamentos = Agendamento::all();
        return view('AgendamentoCad')->with("agendamentos", $agendamentos);
    }
    
    public function adicionarA(Request $req){
        $agendamentos = new Agendamento;
        $agendamentos->Servico = $req->Servico;
        $agendamentos->DataServico = $req->DataServico;
        $agendamentos->Horario = $req->Horario;
        $agendamentos->IdCliente = $req->IdCliente;
        $agendamentos->IdFunc = $req->IdFunc;
    
        $agendamentos->save();
        return redirect()->back();
    }

    public function editarA(Request $req){
        $agendamentos = Agendamento::find($req->id);
        return view('editar')->with("agendamentos", $agendamentos);
    }

    public function atualizarA(Request $req){
        $agendamentos = Agendamento::find($req->id);
        $agendamentos->update(
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
        $agendamentos = Agendamento::find($req->id);
        $agendamentos->delete();
        return redirect()->back();
    }
}
