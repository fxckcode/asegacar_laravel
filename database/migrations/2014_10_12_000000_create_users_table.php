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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos')->nullable();
            $table->integer('telefono')->nullable();
            $table->enum('tipo_documento', ['CC', 'TI', 'PAP', 'CE', 'NIP', 'NIT'])->nullable();
            $table->integer('numero_documento')->nullable();
            $table->enum('rol', ['Administrador', 'Auxiliar administrativo', 'Auxiliar de calidad', 'Auxiliar operativo', 'Medico veterinario'])->nullable();
            $table->string('foto')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
