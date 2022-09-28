<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//membuat table dengan format schema::create(parameter pertama diisi dengan nama table )
    {

        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            //parameter kedua untuk membatasi jumlah character yang masuk ke database
            $table->string('name',75);
            //fungsi nullabel validasi untuk membiarkan data masuk meskipun ada yang kosong
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//fungsi untuk menghapus table jika tablenya ada dengan menggunakan(php artisan rollback)
    {
        Schema::dropIfExists('majors');
    }
};
