<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    /**
     * Show the student dashboard.
     */
    public function index()
    {
        return view('student.dashboard');
    }
}
