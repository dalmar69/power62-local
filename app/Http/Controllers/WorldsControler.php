<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorldsControler extends Controller
{
    //
    public function show($id){
        return view('worlds.show');
    }
}
