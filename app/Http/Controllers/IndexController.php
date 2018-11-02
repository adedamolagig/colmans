<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function courses()
    {
        return view('courses');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function team()
    {
        return view('team');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function testimonals()
    {
        return view('testimonals');
    }

    public function RequestInformation()
    {
        return view('RequestInformation');
    }

    public function programmes()
    {
        return view('programmes');
    }

    public function curriculum()
    {
        return view('curriculum');
    }
    
   public function businessCurriculum()
    {
        return view('department.businessCurriculum');
    } 
}
