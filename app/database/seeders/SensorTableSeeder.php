<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sensors')->insert([
            'naam' => "Paniek knop",
            'huis_id' => "1",
            'enabled' => "true",
            'sensor_id' => "1"
        ]);

        \DB::table('sensors')->insert([
            'naam' => "Water sensor",
            'huis_id' => "1",
            'enabled' => "true",
            'sensor_id' => "2"
        ]);

        \DB::table('sensors')->insert([
            'naam' => "Gas sensor",
            'huis_id' => "1",
            'enabled' => "true",
            'sensor_id' => "3"
        ]);
    }
}
