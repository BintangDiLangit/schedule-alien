<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function index()
    {
        $sch = Schedule::orderBy('created_at', 'desc')->get();

        return view('admin.schedule.index', compact('sch'));
    }

    public function create()
    {
        return view('admin.schedule.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'namaMatkul'    => 'required|string|max:100',
            'kelas'    => 'required|string|max:250',
            'dosen'    => 'required|string',
            'jam'    => 'required|max:250|string',
            'linkGroup'    => 'required|max:250|string',
        ]);

        if (Schedule::create($request->all())) {
            session()->flash('message','Schedule has been added');
            return redirect(route('schedule.index'));
        }
        return redirect(back());


    }

    public function show(Schedule $schedule)
    {
        //
    }

    public function edit($id)
    {
        $sch = Schedule::where('id', $id)->first();
        return view('admin.schedule.edit', compact('sch'));
    }


    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'namaMatkul'    => 'required|string|max:100',
            'kelas'    => 'required',
            'dosen'    => 'required',
            'jam'    => 'required',
            'linkGroup'    => 'required',
        ]);

            $sch = Schedule::find($id);
            $sch->namaMatkul = $request->namaMatkul;
            $sch->kelas = $request->kelas;
            $sch->dosen = $request->dosen;
            $sch->jam = $request->jam;
            $sch->linkGroup = $request->linkGroup;
            $sch->update();

        session()->flash('message','Schedule has been updated');
        return redirect(route('schedule.index'));
    }


    public function destroy($id)
    {
        $sch = Schedule::find($id);
        $sch->delete();
        return redirect(route('schedule.index'));
    }
}