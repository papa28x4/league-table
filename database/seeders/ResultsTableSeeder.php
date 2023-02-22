<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('results')->delete();
        
        \DB::table('results')->insert(array (
            0 => 
            array (
                'id' => 36,
                'match_date' => '2022-11-22',
                'team1' => 'ARG',
                'team2' => 'SAU',
                'team1_score' => 1,
                'team2_score' => 2,
                'created_at' => '2023-02-19 01:22:37',
                'updated_at' => '2023-02-19 01:22:37',
            ),
            1 => 
            array (
                'id' => 37,
                'match_date' => '2022-11-22',
                'team1' => 'MEX',
                'team2' => 'POL',
                'team1_score' => 0,
                'team2_score' => 0,
                'created_at' => '2023-02-19 01:24:17',
                'updated_at' => '2023-02-19 01:24:17',
            ),
            2 => 
            array (
                'id' => 38,
                'match_date' => '2022-11-26',
                'team1' => 'POL',
                'team2' => 'SAU',
                'team1_score' => 2,
                'team2_score' => 0,
                'created_at' => '2023-02-19 01:24:36',
                'updated_at' => '2023-02-19 01:24:36',
            ),
            3 => 
            array (
                'id' => 39,
                'match_date' => '2022-11-26',
                'team1' => 'ARG',
                'team2' => 'MEX',
                'team1_score' => 2,
                'team2_score' => 0,
                'created_at' => '2023-02-19 01:25:14',
                'updated_at' => '2023-02-19 01:25:14',
            ),
            4 => 
            array (
                'id' => 40,
                'match_date' => '2022-11-30',
                'team1' => 'ARG',
                'team2' => 'POL',
                'team1_score' => 2,
                'team2_score' => 0,
                'created_at' => '2023-02-19 01:26:05',
                'updated_at' => '2023-02-19 01:26:05',
            ),
            5 => 
            array (
                'id' => 41,
                'match_date' => '2022-11-30',
                'team1' => 'MEX',
                'team2' => 'SAU',
                'team1_score' => 2,
                'team2_score' => 1,
                'created_at' => '2023-02-19 01:26:28',
                'updated_at' => '2023-02-19 01:26:28',
            ),
        ));
        
        
    }
}