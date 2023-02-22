<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('standings')->delete();
        
        \DB::table('standings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_code' => 'ARG',
                'MP' => 0,
                'W' => 0,
                'D' => 0,
                'L' => 0,
                'Pts' => 0,
                'GF' => 0,
                'GA' => 0,
                'GD' => 0
            ),
            1 => 
            array (
                'id' => 2,
                'country_code' => 'SAU',
                'MP' => 0,
                'W' => 0,
                'D' => 0,
                'L' => 0,
                'Pts' => 0,
                'GF' => 0,
                'GA' => 0,
                'GD' => 0
            ),
            2 => 
            array (
                'id' => 3,
                'country_code' => 'POL',
                'MP' => 0,
                'W' => 0,
                'D' => 0,
                'L' => 0,
                'Pts' => 0,
                'GF' => 0,
                'GA' => 0,
                'GD' => 0
            ),
            3 => 
            array (
                'id' => 4,
                'country_code' => 'MEX',
                'MP' => 0,
                'W' => 0,
                'D' => 0,
                'L' => 0,
                'Pts' => 0,
                'GF' => 0,
                'GA' => 0,
                'GD' => 0
            ),
        ));
    }
}
