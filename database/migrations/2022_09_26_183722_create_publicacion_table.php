<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->id();

            $table->string('estado_publicacion');
            $table->string('calle_publicacion');
            $table->integer('altura_publicacion');
            $table->integer('dormitorios_publicacion');
            $table->integer('banios_publicacion');
            $table->integer('cochera_publicacion');
            $table->integer('ambientes_publicacion');
            $table->double('superficie_cubierta_casa');
            $table->string('imagen_uno_publicacion');
            $table->string('imagen_dos_publicacion');
            $table->string('imagen_tres_publicacion');
            $table->double('superficie_total_terreno');
            $table->double('precio_publicacion');
            $table->string('titulo_publicacion');
            $table->string('descripcion_publicacion');

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('publicacion', function (Blueprint $table) {
            $table->foreignId('id_usuario')->constrained('users');
        });

        //crear tabla Tipo de propiedad
        Schema::create('tipo_propiedad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo_propiedad');
            $table->softDeletes();
            $table->timestamps();
        });
        //crear tabla provincia
        Schema::create('provincia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_provincia');
            $table->softDeletes();
            $table->timestamps();
        });
        //crear tabla localidad
        Schema::create('ciudad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_ciudad');
            $table->softDeletes();
            $table->timestamps();
        });
        //crear clave foreanea de tipo de propiedad
        Schema::table('publicacion', function (Blueprint $table) {
            $table->foreignId('id_tipo_propiedad')->constrained('tipo_propiedad');
        });
        //crear clave foreanea de provincia
        Schema::table('publicacion', function (Blueprint $table) {
            $table->foreignId('id_provincia')->constrained('provincia');
        });
        //crear clave foreanea de ciudad
        Schema::table('publicacion', function (Blueprint $table) {
            $table->foreignId('id_ciudad')->constrained('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacion');
    }
};
