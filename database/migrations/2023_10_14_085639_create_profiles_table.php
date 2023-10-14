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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->text('biografia');
            $table->string('website', 45);

            // Mismo tipo de dato que el campo id de la tabla usuario
            $table->unsignedBigInteger('user_id')->unique(); // Solo puede haber un perfil por cada usuario

            // Para marcar como foreign key (decimos que columan de esta tabla, con qué columna se relaciona y de qué tabla y que cuando se elimine/update el usuario se elimine su perfil)
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
