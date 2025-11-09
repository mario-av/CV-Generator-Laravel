<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up(): void
{

    Schema::create('curriculums', function (Blueprint $table) {
        $table->id();

        $table->string('profile_image')->nullable();

        $table->string('nombre');
        $table->string('apellidos');
        $table->string('direccion');
        $table->string('telefono');
        $table->string('email');
        $table->date('fecha_nacimiento');
        $table->string('nacionalidad');
        $table->string('permiso_conducir');

        $table->text('descripcion_personal');
        $table->text('experiencia');
        $table->text('educacion');
        $table->text('idiomas');
        $table->text('actitudes');
        $table->text('aptitudes');
        $table->text('habilidades_complementarias');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curricula');
    }
};
