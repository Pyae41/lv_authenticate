<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }
    //
    public function perform(){
        Session::flush();

        Auth::logout();

        return redirect('/');
    }
}
