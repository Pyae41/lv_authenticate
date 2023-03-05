<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function __construct()
    {
       return $this->middleware(['guest']);
    }

    public function show(){
        return view('auth.login');
    }

    public function perform(LoginRequest $loginRequest){

        $creditential = $loginRequest->except(['_token']);

        // dd($user->name);
        if(!Auth::validate($creditential)){
            return redirect()->route('login.show');
        }

        if(Auth::attempt($creditential)){
            return redirect()->intended('/');
        }
    }
}
