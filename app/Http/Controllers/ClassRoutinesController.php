<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academic\AcademicClass;
use App\Models\Academic\ClassSection;

class ClassRoutinesController extends Controller
{
    public function classRoutineSearchForm()
    {
        return view('class-routine.class-routine-search-form');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('class-routine.index', [
           // 'subjects' => Subject::with('academicClass')->orderBy('class_id','ASC')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('class-routine.create', [
            'academicClasses' => AcademicClass::orderBy('name','ASC')->where('status', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function studentClassRoutine()
    {
        return view('class-routine.student-class-routine', [
            //'academicClasses' => AcademicClass::orderBy('name','ASC')->where('status', 1)->get()
        ]);
    }
}
