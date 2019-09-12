<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_contact');
            $table->string('nom_projet');
            $table->string('email');
            $table->string('logo');
            $table->string('cahier_charge');
            $table->integer('duree');
            $table->date('date_debut');
            $table->integer('cout');
            $table->string('descriprtion');
            $table->boolean('etat')->default(0);
            $table->timestamps();

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis');
    }
}
