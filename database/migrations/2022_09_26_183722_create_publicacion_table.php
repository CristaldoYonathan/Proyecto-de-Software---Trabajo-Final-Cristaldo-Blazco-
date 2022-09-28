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
    public function up()//Ver la FK
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
        Schema::dropIfExists('publicacion');
    }
};
