<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function adminPage(){
        return view('admin');
    }
    public function userReport(){
        return view('report');
    }


}
