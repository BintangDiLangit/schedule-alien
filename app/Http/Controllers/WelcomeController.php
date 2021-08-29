<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $sch = Schedule::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('sch'));
    }
}