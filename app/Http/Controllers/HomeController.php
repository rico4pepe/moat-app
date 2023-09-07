<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function hello()
    {
        return 'Hello, World!';
    }


    public function loginadmin(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);



            $credentials = $request->only(trim('email'), trim('password'));
           // Auth::attempt($credentials)


            if(Auth::guard('web')->attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect('users')
                    ->withSuccess('You have successfully logged in!');
            }else{
                       throw ValidationException::withMessages(
                            ['email'=>'Invalid Credentials']
                        );
                }







    }

    public function logoutadmin(){
        auth()->logout();

        return redirect('login')
        ->withSuccess('You have successfully logged out!');
    }
}
