<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheda', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nome_scheda');
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('eser');
            $table->integer('n_serie');
            $table->integer('n_rep');
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('eser')->references('id')->on('esercizio')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('scheda');
    }
}
