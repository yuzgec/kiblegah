<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToSliderTable extends Migration
{
    public function up()
    {
        Schema::table('slider', function (Blueprint $table) {
            $table->integer('product_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('slider', function (Blueprint $table) {
            //
        });
    }
}
