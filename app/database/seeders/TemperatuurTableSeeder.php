<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TemperatuurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('temperatuur')->insert([
            'updated_at' => "13:10:23",
            'value' => "21",
            'huis_id' => 1
        ]);
    }
}
