<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id('id_equipment');
            $table->string('nama_equipment', 150)->nullable();
            $table->integer('id_kategori')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('tahun')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('image1', 120)->nullable();
            $table->string('image2', 120)->nullable();
            $table->string('image3', 120)->nullable();
            $table->string('image4', 120)->nullable();
            $table->string('image5', 120)->nullable();
            $table->timestamp('RegDate')->default(now());
            $table->timestamp('UpdationDate')->nullable()->default(null)->onUpdate(now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}

