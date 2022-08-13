<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function AboutUs(){
        return view('pharmacy.aboutUs');
    }//
}
