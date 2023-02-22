<?php

namespace App\Traits;

trait UpdateLeague {
    public function updateLeagueTable($positions, $result)
    {
        foreach($positions as $position)
        {
            if($result->team1 == $position->country_code){
                $team1 = 'team1';
                $team2 = 'team2';
            }else{
                $team1 = 'team2';
                $team2 = 'team1';
            }
    
            $score1 = $team1 . '_score';
            $score2 = $team2 . '_score';
        
            $position->MP += 1;
            $position->GF += $result[$score1];
            $position->GA += $result[$score2];
            $gd = $result[$score1] - $result[$score2];
            $position->GD += $gd;
            
            if($gd > 0)
            {
                $position->W += 1;
                $position->Pts +=3;
            }
            elseif($gd < 0)
            {
                $position->L += 1;
            }
            else
            {
                $position->D += 1;
                $position->Pts +=1;
            }
            
            $position->save();
        }
    }
}
