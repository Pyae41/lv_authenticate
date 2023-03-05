<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['guest']);
    }
    //
    public function show()
    {
        // dd('hell');
        return view('auth.register');
    }

    public function register(RegisterRequest $registerRequest)
    {
        $data = [
            'name' => $registerRequest->name,
            'email' => $registerRequest->email,
            'password' => Hash::make($registerRequest->password),
        ];
        $user = User::create($data);

        // auth()->login($user);

        return redirect()->route('login.show')->with('success', 'hello');
    }
}
