<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->integer('rol');
        });


        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("departamento");
        });
        Schema::create('municipios', function (Blueprint $table) {
            $table->increments('id');
            $table->string("municipio");
            $table->integer("estado")->default(1);
            $table->unsignedInteger("idDepartamento");
            $table->foreign('idDepartamento')->references('id')->on('departamentos');
        });


        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string("placa");
            $table->string("marca");
            $table->string("modelo");
            $table->string("asientos");
            $table->integer("estado")->default(1);
        });


        Schema::create('conductores', function (Blueprint $table) {
            $table->increments('id');
            $table->string("cedula")->unique();
            $table->string("nombre");
            $table->string("telefono");
            $table->integer("estado")->default(1);
        });


        Schema::create('busConductor', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("conductor");
            $table->unsignedInteger("salida");
            $table->unsignedInteger("destino");
            $table->unsignedInteger("bus");
            $table->string("fsalida");
            $table->string("horaSalida");
            $table->float("precio");
            $table->integer("estado")->default(1);
            $table->foreign("conductor")->references("id")->on("conductores");
            $table->foreign("salida")->references("id")->on("municipios");
            $table->foreign("destino")->references("id")->on("municipios");
            $table->foreign("bus")->references("id")->on("buses");
        });


        /*Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("documento");
            $table->string("nombre");
            $table->integer("fondo");
            $table->integer("estado")->default(1);
            $table->unsignedInteger("idUsuario");
            $table->foreign("idUsuario")->references("id")->on("usuarios");
        });*/


        Schema::create('tiquete', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("idbc");
            $table->unsignedInteger("idUsuario");
            $table->timestamp("fechaCompra");
            $table->integer("estado")->default(1);
            $table->foreign("idbc")->references("id")->on("busConductor");
            $table->foreign("idUsuario")->references("id")->on("usuarios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
