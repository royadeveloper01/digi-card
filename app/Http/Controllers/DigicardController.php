<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigicardController extends Controller
{
    public function cards(){
        return view("/html/card");
    }
      
}

