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
        /**
         * Numbers 抽選結果
         */
        Schema::dropIfExists('numbers3_results');
        Schema::create('numbers3_results', function (Blueprint $table) {
            $table->id();
            $table->string('round');
            $table->date('date');
            $table->string('numbers');
            $table->integer('straight')->nullable();
            $table->integer('box')->nullable();
            $table->integer('set')->nullable();
            $table->integer('mini')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
