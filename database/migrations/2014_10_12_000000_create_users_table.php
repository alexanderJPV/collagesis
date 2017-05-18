<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->integer('ci')->unique();
            $table->string('genero');
            //$table->integer('tipo_usuario');
            $table->string('direcion');
            $table->string('email')->unique();            
            $table->string('password');            
            //$table->string('foto',250);                       
            $table->integer('telefono');
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
        Schema::dropIfExists('users');
    }
}       