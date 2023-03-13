<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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

        $this->createViewDoubleNumbersSQL('VIEW_DOUBLE_NUMBERS3', 'numbers3_results');

    }

    private function createViewDoubleNumbersSQL($viewName, $sourceTable)
    {
        DB::statement("DROP VIEW IF EXISTS $viewName");
        DB::statement("CREATE VIEW $viewName AS 
                        SELECT t1.numbers || ' -> ' || t2.numbers as consecutive_numbers,
                            t1.round || ' -> ' || t2.round as consecutive_round,
                            t1.date || ' -> ' || t2.date as consecutive_date
                        FROM $sourceTable as t1 LEFT JOIN $sourceTable as t2
                        ON t1.id - 1 = t2.id
                    ");
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
