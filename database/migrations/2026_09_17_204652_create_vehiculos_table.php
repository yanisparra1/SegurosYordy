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
            $table->string('clase_vehiculo', 50);
            $table->string('tipo', 50);
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->string('carroceria', 50)->nullable();
            $table->string('motor', 50);
            $table->integer('anio');
            $table->string('color', 30);
            $table->string('puesto', 20)->nullable();
            $table->decimal('peso', 8, 2)->nullable();
            $table->string('uso', 50);
            $table->string('placas', 15)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
