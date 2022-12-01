<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alertController extends Controller
{
    public function alert(){
        return view('alert');
    }
}
