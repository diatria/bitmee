<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BankUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users');
            $table->string('bank_nama');
            $table->integer('bank_no_rek');
            $table->string('bank_an');
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
        Schema::dropIfExists('bank_users');
    }
}
