<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::all();
        return view('lab.index', compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        lab::create([
            'lab_no' => $request->lab_no,
            'no_of_pc' => $request->no_of_pc,
            'capacity' => $request->capacity,
            'type' => $request->type,
        ]);
        return redirect()->route('lab.index')->with('success', 'SuccessFully Created Course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $labs = lab::find($id);
        return view('lab.edit', compact('labs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $labs = lab::find($id);
        $data = [
            'lab_no' => $request->lab_no,
            'no_of_pc' => $request->no_of_pc,
            'capacity' => $request->capacity,
            'type' => $request->type,
        ];
        $labs->update($data);
        return redirect()->route('lab.index')->with('success', 'Course edit Successdfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $labs = lab::find($id);
        $labs->delete();
        return redirect()->route('lab.index')->with('success', 'successfully delete');
    }
}
