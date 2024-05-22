<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'NomeFunc',
        'DataNascFunc',
        'CPFfunc',
        'TelefoneFunc',
        'EnderecoFunc',
        'RGFunc',
        'CEPFunc',
        'EmailFunc'
    ];
}
