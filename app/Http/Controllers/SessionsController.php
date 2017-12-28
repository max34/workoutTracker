<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\User;
class SessionsController extends Controller
{
    //
    public function create(){
        return view('sessions.create');
    }

    public function store(){
        $auth = User::where('email', '=', Input::get('email'))->where('password', '=', Hash::make(Input::get('password')))->first();
        if($auth){
            Auth::login($auth);
            return redirect()->to('/dashboard');
        }
        return redirect()->to('register')->withErrors([
            'message' => 'Email or password is incorrect, please try again later'
        ]);
    }

    public function destroy(){
        auth()->logout();

        return redirect()->to('/home');
    }
}
