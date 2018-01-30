<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class RegistrationController extends Controller
{
    public function showLogin(){
        return view('registration.create');
    }

    public function doLogin(){
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::to('login')
               ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else{
            $userdata = array(
              'name' => Input::get('name'),
                'email'=>Input::get('email'),
                'password'=>Input::get('password')
            );

            if(Auth::attempt($userdata)){
                echo 'SUCCESS';

            }else{
                return Redirect::to('login');
            }
        }
    }
}
