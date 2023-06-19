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
            'team1' => 'required|different:team2|unique:results,team1,NULL,id,team2,' . $request->team2,
            'team2' => 'required',
            'team1_score' => 'required|numeric',
            'team2_score' => 'required|numeric',
        ], ['match_date.before_or_equal' => 'Date cannot be in the future',
            'team1.unique' => 'Result for this match has already been entered'
    ]);


   
    // 'service_id' => 'unique:service_details,service_id,NULL,id,user_id,' . $user_id;

    // 'team2' => 'required|unique:results,team2,NULL,id,team1,' . $request->team1,
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
    //     $time = date('Y/m/d');
    //     $request->validate([
    //         'match_date' => "bail|required|date|before_or_equal:$time",
    //         'team1' => 'required|different:team2',
    //         'team2' => 'required',
    //         'team1_score' => 'required|numeric',
    //         'team2_score' => 'required|numeric',
    //     ], ['match_date.before_or_equal' => 'Date cannot be in the future']);

    //     try{
    //         $result = Result::create([
    //             'match_date' => $request->match_date,
    //             'team1' => $request->team1,
    //             'team2' => $request->team2,
    //             'team1_score' => $request->team1_score,
    //             'team2_score' => $request->team2_score,
    //         ]);

    //         return redirect()->route('results.index')->with('message', "League table updated");
    //     }catch(\Throwable $err){
    //         return redirect()->route('results.index')->with('error', $err->getMessage());
    //     }
    // }
    
}


