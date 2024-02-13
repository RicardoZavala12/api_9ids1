<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha');
            $table->string('estado'); // P = 'Pendiente' - A = 'Autorizado'  -  R = 'Rechazado'
            $table->string('motivo');
            $table->string('observaciones');
            $table->unsignedBigInteger('id_profesor');

            //LLave foranea
            $table->foreign('id_profesor')->references('id')->on('profesor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
