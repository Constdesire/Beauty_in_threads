<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nome',
        'DataNasc',
        'CPF',
        'Telefone',
        'Endereco',
        'CEP',
        'Email',
        'Senha'
    ];
}
