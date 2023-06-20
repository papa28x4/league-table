<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Result;
use Illuminate\Http\Request;
use App\Rules\ResultHasBeenEntered;


class ResultController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $results = Result::orderBy('match_date')->get();

        return view('pages.enter-result', compact('teams', 'results' ));
    }

    

    public function store(Request $request)
    {   
        $time = date('Y/m/d');
        $request->validate([
            'match_date' => "bail|required|date|before_or_equal:$time",
            'team1' => ['required', 'different:team2', New ResultHasBeenEntered($request->all()) ],
            'team2' => 'required',
            'team1_score' => 'required|numeric',
            'team2_score' => 'required|numeric',
        ], ['match_date.before_or_equal' => 'Date cannot be in the future']);

        try{
            $result = Result::create([
                'match_date' => $request->match_date,
                'team1' => $request->team1,
                'team2' => $request->team2,
                'team1_score' => $request->team1_score,
                'team2_score' => $request->team2_score,
            ]);

            return redirect()->route('results.index')->with('message', "League table updated");
        }catch(\Throwable $err){
            return redirect()->route('results.index')->with('error', $err->getMessage());
        }
    }    
}


