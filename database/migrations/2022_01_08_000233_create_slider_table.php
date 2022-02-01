<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->string('text3')->nullable();

            $table->string('align')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();

            $table->boolean('status')->default(1);
            $table->integer('rank')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
}
