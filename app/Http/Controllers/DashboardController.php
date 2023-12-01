<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //App/Http/Controllers/DashboardController
    Public function index(){
        return view('dashboard.index');
    }
}
