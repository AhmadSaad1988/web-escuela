<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('name_ar');
            $table->string('surname_ar');
            $table->date('birthday');

            //Foreign key
            $table->foreignId('grupos_id')->constrained('grupos')->nullable();
            $table->foreignId('padres_id')->constrained('padres')->nullable();
            $table->foreignId('profesores_id')->constrained('profesores')->nullable();

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
        Schema::dropIfExists('alumnos');
    }
}
