<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        return view('facultydirectory', ['staff' => Staff::orderBy('name')->get()]);
    }
}
