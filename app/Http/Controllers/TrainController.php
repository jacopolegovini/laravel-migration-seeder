<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->format('Y-m-d');
        $trains = Train::where('departure_date', $now)->get();
        // $trains = Train::all();
        return view("pages.home", compact("trains", "now"));
    }
}
