<?php

namespace App\Http\Controllers\Attendance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherAttendancesController extends Controller
{
    public function attendanceAddSearchForm()
    {
        return view('attendance.teacher.attendance-add-search-form', [
           // 'subjects' => Subject::with('academicClass')->orderBy('class_id','ASC')->paginate(15)
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function attendanceMonthlySearchForm()
    {
         return view('attendance.teacher.attendance-monthly-search-form', [
            // 'subjects' => Subject::with('academicClass')->orderBy('class_id','ASC')->paginate(15)
         ]);   
    }

    public function attendanceReportSearchForm()
    {
         return view('attendance.teacher.attendance-report-search-form', [
            // 'subjects' => Subject::with('academicClass')->orderBy('class_id','ASC')->paginate(15)
         ]);   
    }

}
