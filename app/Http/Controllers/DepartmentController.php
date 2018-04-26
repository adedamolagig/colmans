<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function accounting()
    {
    	return view('departments.accounting');
    }

    public function businessAdministration()
    {
    	return view('departments.businessAdministration');
    }

    public function economics()
    {
    	return view('departments.economics');
    }

    public function finance()
    {
    	return view('departments.finance');
    }
}
