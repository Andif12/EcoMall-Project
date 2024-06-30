<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('product_details', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('product_id');
        $table->string('store_name');
        $table->float('rating_value');
        $table->integer('rating_count');
        $table->timestamps();

        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
