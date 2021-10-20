<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaundryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry', function (Blueprint $table) {
            $table->id();
            $table->string('customer')->nullable();
            $table->string('nomer_telephon')->nullable();
            $table->text('alamat')->nullable();
            $table->boolean('jenis')->nullable();
            $table->integer('berat')->nullable();
            $table->integer('bayar')->nullable();
            $table->date('tgl_laundry')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('laundry');
    }
}
