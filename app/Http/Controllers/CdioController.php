<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdioController extends Controller
{
    public function main(){
        return view('cdio.main');
    }

    public function technology(){
        return view('cdio.Technology & Data.main');
    }

    public function customer(){
        return view('cdio.Customer.main');
    }

    public function operation(){
        return view('cdio.Operation.main');
    }

    public function strategy(){
        return view('cdio.Strategy.main');
    }
}
