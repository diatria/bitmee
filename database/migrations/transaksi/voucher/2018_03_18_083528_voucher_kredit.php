<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VoucherKredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_kredit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voucher_saldo');
            $table->string('voucher_kode');
            $table->integer('id_bank');
            $table->string('fee', 5);
            $table->integer('kode_unik');
            $table->integer('harga_bayar');
            $table->string('status_progress');
            $table->dateTime('limit_waktu');
            $table->dateTime('approval');
            $table->string('approval_user');
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
        Schema::dropIfExists('voucher_kredit');
    }
}
