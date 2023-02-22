<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seed' => 4,
                'country' => 'Argentina',
                'country_code' => 'ARG'
            ),
            1 => 
            array (
                'id' => 2,
                'seed' => 31,
                'country' => 'Saudi Arabia',
                'country_code' => 'SAU'
            ),
            2 => 
            array (
                'id' => 3,
                'seed' => 6,
                'country' => 'Poland',
                'country_code' => 'POL'
            ),
            3 => 
            array (
                'id' => 4,
                'seed' => 13,
                'country' => 'Mexico',
                'country_code' => 'MEX',
            ),
        ));
    }
}
