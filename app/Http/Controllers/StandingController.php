<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standing;
use App\Models\Result;
use App\Traits\UpdateLeague;
use Countries;



class StandingController extends Controller
{
    use UpdateLeague;

    public function index()
    {
        $standings = Standing::with('team')
                        ->orderBy('Pts', 'Desc')
                        ->orderBy('GD', 'Desc')
                        ->orderBy('GF', 'Desc')
                        ->get();
        // return $standings;
        return view('pages.league-table', compact('standings'));
    }

    public function show(Standing $standing)
    {
        $results = Result::where('team1', $standing->country_code)
                ->orWhere('team2', $standing->country_code)
                ->get();

        return view('pages.team-results', compact('results'));
    }

}
