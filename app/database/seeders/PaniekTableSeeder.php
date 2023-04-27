<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaniekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('paniek_knop')->insert([
            'btn_pressed' => 'false'
        ]);

        \DB::table('paniek_knop')->insert([
            'btn_pressed' => 'false'
        ]);

        \DB::table('paniek_knop')->insert([
            'btn_pressed' => 'false'
        ]);
    }
}
