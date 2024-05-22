<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->String("NomeFunc");
            $table->String("DataNascFunc");
            $table->String("CPFfunc");
            $table->String("TelefoneFunc");
            $table->String("EnderecoFunc");
            $table->String("RGFunc");
            $table->String("CEPFunc");
            $table->String("EmailFunc");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
