<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpruntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_emprunt');
            $table->date('date_retour');
            $table->string('etat');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('inscrit_id');
            $table->foreign('inscrit_id')->references('id')->on('inscrits')->onDelete('cascade');
            $table->unsignedBigInteger('livre_id');
            $table->foreign('livre_id')->references('id')->on('livres')->onDelete('cascade');
           // Schema::enableForeignKeyConstraints();

            


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
        
        Schema::dropIfExists('emprunts');
    }
}
