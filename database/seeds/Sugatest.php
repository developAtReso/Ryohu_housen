<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class Sugatest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sugatest')->insert([
            'name' => 'sugataka',
        ]);
    }
}
