<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
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
        Course::create([
            'title' => $request->title,
            'category' => $request->category,
            'type' => $request->type,
            'tecnology' => $request->tecnology,
            'duration' => $request->duration,
            'start_date' => $request->start_date,
        ]);
        return redirect()->route('course.index')->with('success', 'SuccessFully Created Course');
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
        $courses = Course::find($id);
        return view('course.edit', compact('courses'));
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
        $courses = Course::find($id);
        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'type' => $request->type,
            'tecnology' => $request->tecnology,
            'duration' => $request->duration,
            'start_date' => $request->start_date,
        ];
        $courses->update($data);
        return redirect()->route('course.index')->with('success', 'Course edit Successdfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::find($id);
        $courses->delete();
        return redirect()->route('course.index')->with('success', 'successfully delete');
    }
}
