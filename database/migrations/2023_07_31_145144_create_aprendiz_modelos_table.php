<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('aprendizs', function (Blueprint $table) {
            $table->id();
            $table->string('apr_identificacion');
            $table->string('apr_nombres');
            $table->string('apr_apellidos');
            $table->string('apr_email');
            $table->string('apr_telefono');
            $table->string('apr_direccion');
            $table->date('apr_fechanacimiento');
            $table->string('apr_grupo_fk');


            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('aprendizs');
    }
};
