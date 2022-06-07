<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('numero_passport');
            $table->string('telephone');
            $table->string('date_de_naissance');
            $table->string('civilite');
            $table->string('sexe');
            $table->string('addres_personnel');
            $table->foreignId('ville_id');
            $table->foreignId('bank_id');
            $table->timestamps();
            $table->string('nom_complet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
};
