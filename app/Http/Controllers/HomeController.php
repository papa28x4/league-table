<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Result;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teams = Team::all();
        $results = Result::orderBy('match_date')->get();

        return view('pages.enter-result', compact('teams', 'results' ));
    }
}
