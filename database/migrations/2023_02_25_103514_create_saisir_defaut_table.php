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
        Schema::create('saisir_defaut', function (Blueprint $table) {
            $table->id();
            $table->string('of');
            $table->string('operatrice');
            $table->string('N_programme');
            $table->string('quantite');
            $table->unsignedBigInteger('id_defaut');
            $table->unsignedBigInteger('id_utilisateur');
    

            $table->timestamps();


            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs'); 
            $table->foreign('id_defaut')->references('id')->on('type_defaut'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saisir_defaut');
    }
};
