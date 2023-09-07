<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function loginadmin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
    
    
            $credentials = $request->only('email', 'password');
    
    
    
            if(Auth::attempt($credentials ))
            {
                $request->session()->regenerate();
                return redirect('viewUser')
                    ->withSuccess('You have successfully logged in!');
            }else{
                       throw ValidationException::withMessages(
                            ['email'=>'Invalid Credentials']
                        );
                }
    }
    
}
