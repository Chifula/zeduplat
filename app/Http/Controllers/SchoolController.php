<?php

namespace App\Http\Controllers;

use App\Models\School;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::with('courses')->get();
        return view('index', ['schools' => $schools]);
    }
}