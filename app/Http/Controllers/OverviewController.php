<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function getOverview(){
        // add redirect to login
        return view('overview');
    }
}
