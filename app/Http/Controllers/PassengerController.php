<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $passengers = Passenger::all();
        return view("pages.passenger", compact("passenger"));
    }
}
