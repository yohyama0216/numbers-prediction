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
         * Numbers 抽選
         */
        Schema::dropIfExists('drawings');
        Schema::create('drawings', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->date('date');
            $table->string('round');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

        /**
         * Numbers 抽選結果
         */
        Schema::dropIfExists('results');
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drawing_id');
            $table->string('numbers');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

        /**
         * 当選金
         */
        Schema::dropIfExists('prizes');
        Schema::create('prizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('result_id');
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
