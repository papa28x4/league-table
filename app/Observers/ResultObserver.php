<?php

namespace App\Observers;

use App\Models\Result;
use App\Models\Standing;
use App\Traits\UpdateLeague;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ResultObserver
{
    use UpdateLeague;
    /**
     * Handle the Result "created" event.
     *
     * @param  \App\Models\Result  $result
     * @return void
     */
    public function created(Result $result)
    {
        
        $positions = Standing::whereIn('country_code', [$result->team1, $result->team2])->get();
        
        $this->updateLeagueTable($positions, $result);

        // return 'League table updated';
    }

    /**
     * Handle the Result "updated" event.
     *
     * @param  \App\Models\Result  $result
     * @return void
     */
    public function updated(Result $result)
    {
        //
    }

    /**
     * Handle the Result "deleted" event.
     *
     * @param  \App\Models\Result  $result
     * @return void
     */
    public function deleted(Result $result)
    {
        //
    }

    /**
     * Handle the Result "restored" event.
     *
     * @param  \App\Models\Result  $result
     * @return void
     */
    public function restored(Result $result)
    {
        //
    }

    /**
     * Handle the Result "force deleted" event.
     *
     * @param  \App\Models\Result  $result
     * @return void
     */
    public function forceDeleted(Result $result)
    {
        //
    }
}
