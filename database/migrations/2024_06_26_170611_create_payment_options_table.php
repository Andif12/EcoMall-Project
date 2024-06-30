<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('payment_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->string('payment_method');
            $table->string('nomor_kartu')->nullable();
            $table->string('nama_kartu')->nullable();
            $table->date('tanggal_kadaluarsa')->nullable();
            $table->string('cvv')->nullable();
            $table->string('email_paypal')->nullable();
            $table->string('jenis_bank')->nullable();
            $table->string('nomor_rekening')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_options');
    }
}
