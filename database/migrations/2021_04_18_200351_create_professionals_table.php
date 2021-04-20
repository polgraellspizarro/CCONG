<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('nif');
            $table->string('nom');
            $table->string('cognom');
            $table->string('adreca');
            $table->string('poblacio');
            $table->string('comarca');
            $table->string('fixe');
            $table->string('mobil');
            $table->string('email');
            $table->string('carrec');
            $table->string('pagament');
            $table->string('IRPF');
            $table->string('nomOng');
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
        Schema::dropIfExists('professionals');
    }
}
