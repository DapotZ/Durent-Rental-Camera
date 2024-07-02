<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactusinfo', function (Blueprint $table) {
            $table->id('id_info');
            $table->text('alamat_kami')->nullable();
            $table->string('email_kami', 255)->nullable();
            $table->char('telp_kami', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactusinfo');
    }
}

