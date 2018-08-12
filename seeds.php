<?php

use Illuminate\Database\Seeder;
class platedata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 10; $i++){
            DB::table('platedata')->insert([
                'album' => str_random(5) . ' (2018)',
                'artist' => str_random(5) . ' vocal',
            ]);
        }
        }
}
