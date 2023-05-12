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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->string('Voucher')->nullable();
            $table->string('Cheque')->nullable();
            $table->double('CP')->nullable();
            $table->string('Nombre');
            $table->string('Detalle');
            $table->double('Entrada')->nullable();
            $table->double('Salida')->nullable();
            $table->double('Monto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
