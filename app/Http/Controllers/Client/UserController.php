<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function adminDash(){
        return view('admin.dashboard');

    }
    public function show()
    {
        return view('Client.User');
    }

    public function register(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:10'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','min:5'],
            'confirm_pass'=>['same:password']


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters',
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 3',
            'confirm_pass.same'=>'password dont match',


        ]);

        $u=new User();
        $u->name=$request->name;
        $u->password=Hash::make($request->password);
        $u->email=$request->email;

        if($u->save()){
            $u->attachRole('admin');
            return redirect()->route('User')
            ->with(['success'=>'user created successful']);
        }

        return back()->with(['error'=>'can not create user']);

    }
    public function showLogin(){
        return  view('Front.login');
    }

    public function login(Request $request){
        Validator::validate($request->all(),[
            'email'=>['email','required','min:3','max:50'],
            'password'=>['required','min:5']


        ],[
            'email.required'=>'this field is required',
            'email.min'=>'can not be less than 3 letters',
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){


            // if(Auth::user()->hasRole('admin'))
            return redirect()->route('dashboard');
            // else
            // return redirect()->route('/');


        }
        else {
            return redirect()->route('login')->with(['message'=>'incorerct username or password or your account is not active ']);
        }

        }

        public function editUser(){
            $u=User::find(5);
            if($u->hasRole('admin'))
            {

            }
            else {

            }
        }
        public function logout(){

            Auth::logout();
            return redirect()->route('login');

        }
}
