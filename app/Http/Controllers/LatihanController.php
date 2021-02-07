<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function Index(){
        return view('admin.index');
    }
    public function multimedia(){
        return 'bebas';
    }
}
