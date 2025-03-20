<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProfileTable extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->date('ttl'); // Mengganti ttl dengan nama lebih jelas
            $table->string('foto');
            $table->timestamps();
        });
    }
}
    /**
     * Undo migrasi.
     *
   //  * @return void
     */
   // public function down()
   // {
 //       Schema::dropIfExists('detail_profile');
  //  }

