<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->runDrawings();
    }

    private function runDrawings()
    {
        DB::table('numbers3_results')->truncate();
        $data = json_decode(file_get_contents(database_path('data\numbers3ResultList.json')), true);

        foreach ($data as $key => $item) {
            $drawing = [
                'round' => $key,
                'date' => $item['date'],
                'numbers' => $item['numbers'],
                'straight' => 100000,
                'box' => 30000,
                'set' => 60000,
                'mini' => 10000,
                'created_at' => now(),
                'updated_at' => now()
            ];
            DB::table('numbers3_results')->insert($drawing);
        }
    }
}
