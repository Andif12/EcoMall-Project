<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToProductDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->string('image')->nullable()->after('rating_count');
        });
    }

    public function down()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
