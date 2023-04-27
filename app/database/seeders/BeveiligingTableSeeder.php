<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BeveiligingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beveiliging')->insert([
            'huis_id' => '1'
        ]);
    }
}
