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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->string('prenom_pere');
            $table->string('nom_mere');
            $table->string('prenom_mere');
            $table->date('date_naissance');
            $table->string('wilaya_naissance');
            $table->string('communen_naissance');
            $table->string('num_act_naissance');
            $table->string('type_act_naissance');
            $table->string('situation_familiale');
            $table->string('niveau_dinstructions');
            $table->integer('numbre_enfants');
            $table->integer('numbre_personnes');
            $table->integer('age');
            $table->string('activite');
            $table->integer('duree');
            $table->string('certificat');
            $table->string('experience');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
