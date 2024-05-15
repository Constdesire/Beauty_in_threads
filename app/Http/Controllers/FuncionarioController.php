<?php

namespace App\Http\Controllers;
use App\Models\Funcionarios;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function FuncionarioCad (Request $req){
    $funcionario = Funcionarios::all();
    return view ('FuncionarioCad')->with("funcioonario". $funcionario);
    }

    public function AdicionarFunc(Request $req){
        $funcionario = new Funcionarios;
        $funcionario->NomeFunc  = $req->NomeFunc;
        $funcionario->DataNascFunc = $req->DataNascFunc;
        $funcionario->CPFfunc = $req->CPFfunc;
        $funcionario->TelefoneFunc = $req->TelefoneFunc;
        $funcionario->EnderecoFunc = $req->EnderecoFunc;
        $funcionario->RGFunc = $req->RGFunc;
        $funcionario->CEPFunc = $req->CEPFunc;
        $funcionario->EmailFunc = $req->EmailFunc;
        $funcionario->save();
        return redirect()->back();
    }
    public function  editarFunc($id){
        $funcionario = Funcionarios::find($id);
        return view('editar')->with("funcionario", $contact);
    }
    
    public function atualizarFunc(Request $req){
        $funcionario = Funcionarios::find($req->id);
        $funcionario->update( [
        "NomeFunc" => $req->NomeFunc,
        "DataNascFunc" => $req->DataNascFunc,
        "CPFfunc" => $req->CPF,
        "TelefoneFunc" => $req->TelefoneFunc,
        "EnderecoFunc" => $req->EnderecoFunc,
        "RGFunc" => $req->RGFunc,
        "CEPFunc" => $req->CEPFunc,
        "EmailFunc" => $req->EmailFunc ]);    
        return redirect()->back();
    }
    public function excluirFunc(Request $req){
        $funcionario = Funcionarios::find($req->id);
        $funcionario->delete();
        return redirect()->back();
    }



}
