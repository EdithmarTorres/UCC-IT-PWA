<?php 

namespace App\Http\Controllers;

class PageController extends Controller
{
    // VIEW FOR HOME PAGE
    public function index()
    {
        return view('home');
    }

    // VIEW FOR UCC FACULTY/STAFF DIRECTORY
    public function directory()
    {
        return view('facultydirectory');
    }

    // VIEW FOR COURSES PAGE
    public function courses()
    {
        return view('courses');
    }

    // VIEW FOR ADMISSIONS PAGE
    public function admissions()
    {
        return view('admissions');
    }

    // VIEW FOR SOCIAL MEDIA PAGE
    public function socialMedia()
    {
        return view('social-media');
    }
}
