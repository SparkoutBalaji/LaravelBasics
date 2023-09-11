<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class htmlform extends Controller
{
    public function form(Request $request){
        return dd($request->input());
    }
}
