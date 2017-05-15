<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('est_tutor', function (Blueprint $table) {
            $table->increments('id');            
            $table->boolean('status');            
            $table->integer('id_st')->unsigned();
            $table->foreign('id_st')->references('id_st')->on('estudiante');
            $table->integer('id_doc')->unsigned();
            $table->foreign('id_doc')->references('id_doc')->on('docente');            
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
                
    }
}
