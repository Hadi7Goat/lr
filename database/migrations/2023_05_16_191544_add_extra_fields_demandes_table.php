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
        Schema::table('demandes', function (Blueprint $table) {
            $table->string('wilaya');
            $table->string('daira');
            $table->string('commune');
            $table->string('codepostal');
            $table->string('adresse');
            $table->string('mobile');
            $table->string('mobile2')->nullable();
            $table->string('email');
            $table->string('nin');
            $table->string('piece_identite_num');
            $table->date('piece_identite_date');
            $table->string('piece_identite_wilaya');
            $table->string('piece_identite_commune');
            $table->string('habitation');
            $table->string('certificat_type')->nullable();

            $table->string('credit_immobilier');
            $table->string('mensualite_credit_immobilier')->nullable();
            $table->string('organisme_credit_immobilier')->nullable();
            $table->date('date_fin_credit_immobilier')->nullable();

            $table->string('credit_voiture');
            $table->string('mensualite_credit_voiture')->nullable();
            $table->string('organisme_credit_voiture')->nullable();
            $table->date('date_fin_credit_voiture')->nullable();

            $table->string('autre_credit');
            $table->string('mensualite_autre_credit')->nullable();
            $table->string('organisme_autre_credit')->nullable();
            $table->date('date_fin_autre_credit')->nullable();


            $table->string('loyer');
            $table->string('mensualite_loyer')->nullable();





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demandes', function (Blueprint $table) {
            $table->dropColumn('wilaya');
            $table->dropColumn('daira');
            $table->dropColumn('commune');
            $table->dropColumn('codepostal');
            $table->dropColumn('adresse');
            $table->dropColumn('mobile');
            $table->dropColumn('mobile2');
            $table->dropColumn('email');
            $table->dropColumn('nin');
            $table->dropColumn('piece_identite_num');
            $table->dropColumn('piece_identite_date');
            $table->dropColumn('piece_identite_wilaya');
            $table->dropColumn('piece_identite_commune');
            $table->dropColumn('habitation');
            $table->dropColumn('certificat_type');

            $table->dropColumn('credit_immobilier');
            $table->dropColumn('mensualite_credit_immobilier');
            $table->dropColumn('organisme_credit_immobilier');
            $table->dropColumn('date_fin_credit_immobilier');

            $table->dropColumn('credit_voiture');
            $table->dropColumn('mensualite_credit_voiture');
            $table->dropColumn('organisme_credit_voiture');
            $table->dropColumn('date_fin_credit_voiture');

            $table->dropColumn('autre_credit');
            $table->dropColumn('mensualite_autre_credit');
            $table->dropColumn('organisme_autre_credit');
            $table->dropColumn('date_fin_autre_credit');


            $table->dropColumn('loyer');
            $table->dropColumn('mensualite_loyer');
        });
    }
};
