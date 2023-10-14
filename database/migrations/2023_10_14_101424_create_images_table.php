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
        Schema::create('images', function (Blueprint $table) {
            //$table->id(); // HAY QUE ELIMINAR EL ID, NO LO NECESITAMOS Y SI SE CREA SERÁ LA CLAVE PRIMARIA

            $table->string('url');
            // ESTO ES UNA TABLA CON RELACIONES POLIMORFICAS CON UNA CLAVE UNICA FORMADA POR LA RELACIÓN DE LOS VALORES DE LOS CAMPOS DE ESTAS DOS COLUMNAS IMAGEABLE
            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');
            // LLAVE PRIMARIA COMPUESTA
            $table->primary(['imageable_id', 'imageable_type']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
