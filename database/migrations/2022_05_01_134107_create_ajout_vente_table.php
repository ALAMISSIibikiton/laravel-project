<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjoutVenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajout_vente', function (Blueprint $table) {
            $table->id();
            $table->string('nom_pro');
            $table->string('tel_pro');
            $table->string('ville_pro');
            $table->string('quartier_pro');
            $table->Integer('nbr');
            $table->string('nego');
            $table->string('doc');
            $table->string('coord');
            $table->string('dist');
            $table->string('prox')->nullable();
            $table->string('estdisponible');
            $table->string('type_bien');
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
        Schema::dropIfExists('ajout_vente');
    }
}
