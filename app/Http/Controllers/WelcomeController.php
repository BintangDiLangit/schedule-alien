<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $search = request()->query('search');
        if ($search) {
            $sch = Schedule::where('namaMatkul', 'LIKE', '%' . $search . '%')
                ->orWhere('dosen', 'LIKE', '%' . $search . '%')
                ->orWhere('kelas', 'LIKE', '%' . $search . '%')->get();
        } else {
            $sch = Schedule::orderBy('created_at', 'desc')->get();
        }
        return view('welcome', compact('sch'));
    }
}