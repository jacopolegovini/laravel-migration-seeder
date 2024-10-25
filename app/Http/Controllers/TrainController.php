<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $trains = Train::where('departure_date', "2024-10-25")->get();
        // $trains = Train::all();
        return view("pages.home", compact("trains"));
    }
}
