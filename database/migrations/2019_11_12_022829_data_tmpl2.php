<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataTmpl2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatmpl2new', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turunanindikator_id');
            $table->string('tahun');
            $table->integer('nu_karakteristik');
            $table->integer('nu_baris');
            $table->integer('nu_periode');
            $table->string('data')->nullable();
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
