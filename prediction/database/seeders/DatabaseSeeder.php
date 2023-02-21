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
        DB::table('drawings')->truncate();
        $data = json_decode(file_get_contents(database_path('data\numbers3ResultList.json')),true);

        $drawing_id = 1;
        foreach($data as $key => $item) {
            $drawing = [
                'id' => $drawing_id,
                'date' => $item['date'],
                'round' => $key,
                'created_at' => now(),
                'updated_at' => now()
            ];
            DB::table('drawings')->insert($drawing);

            $result = [
                'drawing_id' => $drawing_id,
                'numbers' => $item['numbers'],
                'created_at' => now(),
                'updated_at' => now() 
            ];
            DB::table('results')->insert($result);
            $drawing_id++;
        }
    }
}
