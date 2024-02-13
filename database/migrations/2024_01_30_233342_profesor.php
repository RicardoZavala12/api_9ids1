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
        Schema::create('profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_empleado', 10)->unique();
            $table->string('nombre', 255);
            $table->integer('num_horas');
            $table->integer('division_id');
            $table->date('inicio_contrato');
            $table->date('fin_contrato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor');
    }
};
