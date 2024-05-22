<?php

namespace App\Http\Controllers;
use App\Models\Cliente;


use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function ClienteCad (Request $req){
        $cliente = Cliente::all();
        return view('ClienteCad')->with("cliente", $cliente);
    }

    public function adicionarC(Request $req){
        $cliente = new Cliente;
        $cliente->Nome = $req->Nome;
        $cliente->DataNasc = $req->DataNasc;
        $cliente->CPF = $req->CPF;
        $cliente->Telefone = $req->Telefone;
        $cliente->Endereco = $req->Endereco;
        $cliente->CEP = $req->CEP;
        $cliente->Email = $req->Email;
        $cliente->save();
        return redirect()->back();
    }

    public function  editarC($id){
        $cliente = Cliente::find($id);
        return view('ClienteEdit')->with("cliente", $cliente);
    }

    public function atualizarC(Request $req){
        $cliente = Cliente::find($req->id);
        $cliente->update([
            "Nome" => $req->Nome,
            "DataNasc" => $req->DataNasc,
            "CPF" => $req->CPF,
            "Telefone" => $req->Telefone,
            "Endereco" => $req->Endereco,
            "CEP" => $req->CEP,
            "Email" => $req->Email
        ]);    
        return redirect('/ClienteCad');
    }
    
public function excluirC(Request $req){
    $cliente = Cliente::find($req->id);
    $cliente->delete();
    return redirect()->back();
}

}