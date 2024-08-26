<?php

namespace App\Http\Controllers;

use App\Models\PDHourlyOutPut;
use Illuminate\Http\Request;

class PDHourlyOutputControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PDHO = PDHourlyOutput::all();
        // $categories = ['6.45-7.45', '7.45-8.45'];
        // return view('page.pdhourlyoutput.index', compact('PDHO', 'categories'));
        return view('layout.pdhourlyoutput.index', compact(['PDHO']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $PDHO = PDHourlyOutput::get();
        // return view('page.pdhourlyoutput.create', compact(['PDHO']));
        return view('layout.pdhourlyoutput.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PDHourlyOutput::create($request->all());
        return redirect('layout.pdhourlyoutput.index')->with('success', 'Data successfully insert.');

        // $request->validate([
        //     // 'time' => 'required|in:6.45-7.45,7.45-8.45',
        //     'time' => 'required',
        // ]);
        // $PDHO = PDHourlyOutput::find($id);
        // $PDHO->create([
        //     'name' => $request->name,
        //     'time' => $request->time,
        //     'target' => $request->target,
        //     'output' => $request->output,
        //     'accm' => $request->accm,
        //     'date' => $request->date,
        //     'process' => $request->process,
        //     'shift' => $request->shift,
        //     'lot' => $request->lot,
        //     'deskription' => $request->deskription,
        // ]);
        // return redirect('pdhourlyoutput.index')->with('success', 'Data successfully insert.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
