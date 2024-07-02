<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpages', function (Blueprint $table) {
            $table->id();
            $table->string('PageName', 255)->nullable();
            $table->string('type', 255)->default('');
            $table->longText('detail');
        });

        // Insert data
        DB::table('tblpages')->insert([
            ['id' => 1, 'PageName' => 'Terms and Conditions', 'type' => 'terms', 'detail' => '<h2><font size="3"><span class="purple">Syarat</span> Ketentuan Penyewaan Mobil</font></h2>...'],
            ['id' => 5, 'PageName' => 'Rekening', 'type' => 'rekening', 'detail' => '123456789 Bank BRI a/n HASHIFAH'],
            ['id' => 0, 'PageName' => 'Driver', 'type' => 'driver', 'detail' => '450000'],
            ['id' => 2, 'PageName' => 'Privacy Policy', 'type' => 'privacy', 'detail' => '<span style="color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; text-align: justify;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'],
            ['id' => 3, 'PageName' => 'Tentang Kami', 'type' => 'aboutus', 'detail' => '<div style="text-align: center;"><span style="color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif;">Durent adalah tempat untuk membantu dan memudahkan dalam segala kegiatan masyarakat maupun profesional. Dan kami harap kami bisa terus menjadi pilihan utama dalam membantu kalian dalam segala kegiatan.</span></div>'],
            ['id' => 11, 'PageName' => 'FAQs', 'type' => 'faqs', 'detail' => '<div style="text-align: justify;"><span style="font-size: 1em; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif;">Q : Bagaimana cara menyewa equipment di Durent?</span></div><div style="text-align: justify;"><span style="font-size: 1em; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif;">A : Pertama anda harus mendaftar terlebih dahulu sebagai user melalui menu yang telah disediakan.</span></div>'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpages');
    }
}

