<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seguros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero_seguro')->unsigned()->unique();
            $table->foreignId('contratante_id')->constrained()->cascadeOnDelete();
            $table->foreignId('vehiculo_id')->constrained()->cascadeOnDelete();
            $table->foreignId('garantia_id')->constrained()->cascadeOnDelete();
            $table->date('fecha_creacion')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seguros');
    }
};
