<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->string('nom_pro');
            $table->string('tel_pro');
            $table->string('ville_lo');
            $table->string('quartier_lo');
            $table->Integer('nbr_jardin');
            $table->Integer('nbr_parking');
            $table->Integer('nbr_appart');
            $table->Integer('nbr_chambre');
            $table->Integer('nrb_cuisine');
            $table->Integer('super');
            $table->string('estmeuble');
            $table->Integer('nrb_bal');
            $table->Integer('nrb_guer');
            $table->string('img')->nullable();
            $table->string('comm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }
}
