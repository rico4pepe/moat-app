<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //


    public function register(){
        $reg = DB::select('select * from students');
        dd($reg);
        //return view('register');
    }
}
