<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->integer('ci')->unique();
            $table->string('genero');
            $table->string('direcion');
            $table->string('email',128)->unique();
            $table->string('password');            
            $table->string('foto');                       
            $table->integer('telefono');
            $table->integer('permiso');
            $table->rememberToken();
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
        Schema::dropIfExists('personas');
    }
}       