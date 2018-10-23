<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function osEnilolobo()
    {
    	return view('staffPages.osEnilolobo');
    }

    public function ooAremu()
    {
    	return view('staffPages.ooAremu');
    }

    public function cOgboi()
    {
    	return view('staffPages.cOgboi');
    }

    public function boNjogo()
    {
    	return view('staffPages.boNjogo');
    }

    public function baBello()
    {
        return view('staffPages.baBello');
    }

    public function gcDaramola()
    {
        return view('staffPages.gcDaramola');
    }

    public function mkOnifade()
    {
        return view('staffPages.mkOnifade');
    }

    public function cfNwoye()
    {
        return view('staffPages.cfNwoye');
    }

    public function lImeokparia()
    {
        return view('staffPages.lImeokparia');
    }
}
