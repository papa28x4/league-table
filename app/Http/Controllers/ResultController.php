<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Team;

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
            'team1' => 'required|different:team2',
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

    // public function store(Request $request)
    // {   
        
    //         $request->validate([
    //             'match_date' => 'required',
    //             'team1' => 'required|different:team2',
    //             'team2' => 'required',
    //             'team1_score' => 'required',
    //             'team2_score' => 'required',
    //         ], ['team1.different' => 'Team 1 and Team 2 cannot be the same']);
    //         $result = Result::create([
    //             'match_date' => $request->match_date,
    //             'team1' => $request->team1,
    //             'team2' => $request->team2,
    //             'team1_score' => $request->team1_score,
    //             'team2_score' => $request->team2_score,
    //         ]);

    //         return redirect()->route('results.index')->with('message', "League table updated");
       
    // }

}


