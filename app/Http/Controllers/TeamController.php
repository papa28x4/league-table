<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        return Team::all();
    }

    public function show(Team $team)
    {
        return $team;
    }

}
