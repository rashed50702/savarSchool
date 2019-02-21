<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    
    public function giveAttendance()
    {
        return view('attendance.create', [
           // 'subjects' => Subject::with('academicClass')->orderBy('class_id','ASC')->paginate(15)
        ]);
        
    }
}
