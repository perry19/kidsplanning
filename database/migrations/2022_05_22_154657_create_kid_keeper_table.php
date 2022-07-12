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
    public function up()
    {
        Schema::create('kid_keeper', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();

            $table->integer('kid_id')->unsigned();
            $table->integer('keeper_id')->unsigned();

            $table->foreign('kid_id')->references('id')->on('kids');
            $table->foreign('keeper_id')->references('id')->on('keepers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kid_keeper');
    }
};
