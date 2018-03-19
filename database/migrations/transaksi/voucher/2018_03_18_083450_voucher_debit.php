<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VoucherDebit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_debit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voucher_kode');
            $table->integer('voucher_saldo');
            $table->integer('fee');
            $table->string('diskon_kode', 10);
            $table->integer('diskon_saldo');
            $table->integer('saldo');
            $table->string('status_progress');
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
        Schema::dropIfExists('voucher_debit');
    }
}
