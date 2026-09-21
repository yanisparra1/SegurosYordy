<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clase_vehiculo_id')->constrained('clase_vehiculos');
            $table->foreignId('tipo_vehiculo_id')->constrained('tipo_vehiculos');
            $table->foreignId('marca_vehiculo_id')->constrained('marca_vehiculos');
            $table->foreignId('modelo_vehiculo_id')->constrained('modelo_vehiculos');
            $table->string('carroceria', 50)->nullable();
            $table->string('motor', 50);
            $table->integer('anio');
            $table->foreignId('color_vehiculo_id')->constrained('color_vehiculos');
            $table->string('puesto', 20)->nullable();
            $table->decimal('peso', 8, 2)->nullable();
            $table->foreignId('uso_vehiculo_id')->constrained('uso_vehiculos');
            $table->string('placas', 15)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
