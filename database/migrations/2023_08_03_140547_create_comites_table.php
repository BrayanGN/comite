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
        Schema::create('comites', function (Blueprint $table) {
            $table->id();
            $table->date('com_fechasolicitud');
            $table->string('com_descripcionsolicitud');
            $table->string('com_tipofalta');
            $table->string('com_carpetanexos');
            $table->string('com_acta');
            $table->string('com_estado');
            $table->string('com_recomendacion');
            $table->unsignedBigInteger('com_instructorsolicitante_fk');
            $table->foreign('com_instructorsolicitante_fk')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comites');
    }
};
