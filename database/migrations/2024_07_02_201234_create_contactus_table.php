<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus', function (Blueprint $table) {
            $table->id('id_cu');
            $table->string('nama_visit', 100)->nullable();
            $table->string('email_visit', 120)->nullable();
            $table->char('telp_visit', 16)->nullable();
            $table->longText('pesan')->nullable();
            $table->timestamp('tgl_posting')->default(now());
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactus');
    }
}

