<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('logo');
            $table->string('descriprtion');
            $table->string('fichier');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('etat');
            $table->timestamps();

            $table->integer('devis_id')->nullable()->unsigned();
            $table->foreign('devis_id')->references('id')->on('devis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
