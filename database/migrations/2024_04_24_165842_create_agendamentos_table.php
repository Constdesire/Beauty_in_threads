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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->String("Servico");
            $table->Date("DataServico");
            $table->String("Horario");
            $table->unsignedBigInteger('IdCliente');
            $table->unsignedBigInteger('IdFunc');
            $table->timestamps();
            $table->foreign('IdCliente')->references('id')->on('Clientes')->onDelete('cascade');
            $table->foreign('IdFunc')->references('id')->on('Funcionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
};
