<?php

use Illuminate\Database\Seeder;

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
