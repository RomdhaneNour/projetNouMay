<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePFESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_f_e_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('titre');
            $table->string('sujet');
            $table->integer('periode');
            $table->integer('nb_stagiaire');
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
        Schema::dropIfExists('p_f_e_s');
    }
}
