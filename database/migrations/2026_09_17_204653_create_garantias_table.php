<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('garantias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('danos_a_cosas', 12, 2)->default(0);
            $table->decimal('danos_a_personas', 12, 2)->default(0);
            $table->decimal('asistencia_legal', 12, 2)->default(0);
            $table->decimal('muerte_conductor_o_pasajero', 12, 2)->default(0);
            $table->decimal('invalidez_conductor_o_pasajero', 12, 2)->default(0);
            $table->decimal('gastos_medicos', 12, 2)->default(0);
            $table->decimal('accidentes_a_ocupantes', 12, 2)->default(0);
            $table->decimal('equipaje_por_persona', 12, 2)->default(0);
            $table->decimal('servicio_de_grua_plan', 12, 2)->default(0);
            $table->decimal('sistema_satelital', 12, 2)->default(0);
            $table->decimal('total', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('garantias');
    }
};
