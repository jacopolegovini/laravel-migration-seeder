<?php

namespace App\Http\Controllers;

use App\Models\Checker;
use Illuminate\Http\Request;

class CheckerController extends Controller
{
    public function index()
    {
        $checkers = Checker::all();
        return view("pages.checker", compact("checkers"));
    }
}
