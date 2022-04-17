<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('pegawais', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email');
        //     $table->date('tgl_lahir');
        //     $table->string('no_telp');
        //     $table->string('alamat');
        //     $table->integer('jabatan');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}
