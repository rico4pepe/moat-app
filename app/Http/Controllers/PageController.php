<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Student;

class PageController extends Controller
{
    //
    public function register(){
        return view('/register');
    }

    public function login(){


        return view('login');


    }

    public function studentlogin(){


        return view('studentlogin');


    }




    public function dashboard(){
        return view('/');
    }

    public function viewUser(){
        //$students = Student::all();

        if(auth()->user()->name === 'Admin'){
            $users = User::has('student')->with('student')->get();
            //dd($users);
            //return view('userinfo', compact( 'users'));

        }else{
            $id = auth()->user()->id;

            $users = User::whereHas('student')->with('student')->where('id', $id)->get();
            //dd($users);
        }

        return view('viewUser', compact('users'));


    }

    public function getProject(){
        return view ('project');
    }
    public function viewProject(){
        //$students = Student::all();

        if(auth()->user()->name === 'Admin'){
            $users = User::has('project')->with('project')->get();
            //dd($users);
            //return view('userinfo', compact( 'users'));

        }else{
            $id = auth()->user()->id;

            //$users = User::whereHas('project')->with('project')->where('id', $id)->get();
            $user = User::with('project')->find($id);
            //dd( $projectCount);
        }

        return view('/viewProject', compact('user')) ;// must look at this one more time


    }
}
