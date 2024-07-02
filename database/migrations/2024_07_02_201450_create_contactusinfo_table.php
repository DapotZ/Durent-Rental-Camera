<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->tinyText('alamat_kami')->nullable();
            $table->string('email_kami', 255)->nullable();
            $table->char('telp_kami', 11)->nullable();
        });

        DB::table('contactusinfo')->insert([
            [
                'id_info' => 1,
                'alamat_kami' => 'Rental Equipment Jl. Tiban Koperasi, Kec. Sekupang, Kota, Batam',
                'email_kami' => 'Durent@gmail.com',
                'telp_kami' => '08777555444'
            ],
        ]);
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
