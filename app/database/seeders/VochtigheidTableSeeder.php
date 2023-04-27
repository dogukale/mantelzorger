<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VochtigheidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vochtigheid')->insert([
            'updated_at' => "13:10:27",
            'value' => "54",
            'huis_id' => '1'
        ]);
    }
}
