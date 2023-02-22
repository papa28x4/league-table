<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StandingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
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
                'MP' => 3,
                'W' => 2,
                'D' => 0,
                'L' => 1,
                'Pts' => 6,
                'GF' => 5,
                'GA' => 2,
                'GD' => 3,
                'created_at' => NULL,
                'updated_at' => '2023-02-19 01:26:05',
            ),
            1 => 
            array (
                'id' => 2,
                'country_code' => 'SAU',
                'MP' => 3,
                'W' => 1,
                'D' => 0,
                'L' => 2,
                'Pts' => 3,
                'GF' => 3,
                'GA' => 5,
                'GD' => -2,
                'created_at' => NULL,
                'updated_at' => '2023-02-19 01:26:28',
            ),
            2 => 
            array (
                'id' => 3,
                'country_code' => 'POL',
                'MP' => 3,
                'W' => 1,
                'D' => 1,
                'L' => 1,
                'Pts' => 4,
                'GF' => 2,
                'GA' => 2,
                'GD' => 0,
                'created_at' => NULL,
                'updated_at' => '2023-02-19 01:26:05',
            ),
            3 => 
            array (
                'id' => 4,
                'country_code' => 'MEX',
                'MP' => 3,
                'W' => 1,
                'D' => 1,
                'L' => 1,
                'Pts' => 4,
                'GF' => 2,
                'GA' => 3,
                'GD' => -1,
                'created_at' => NULL,
                'updated_at' => '2023-02-19 01:26:28',
            ),
        ));
        
        
    }
}