<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

    public function profileUpdate()
    {
        return Auth::user()->id;
    }

    public function userList()
    {
        return view('user.user-list', [
           // 'subjects' => Subject::with('academicClass')->orderBy('class_id','ASC')->paginate(15)
        ]);
    }

    public function userCreate()
    {
        return view('user.create', [
           // 'subjects' => Subject::with('academicClass')->orderBy('class_id','ASC')->paginate(15)
        ]);
    }
}
