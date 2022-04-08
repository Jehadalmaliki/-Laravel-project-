<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
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
        if($u->save())
        return redirect()->route('User')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
    public function login(Request $request){
        Validator::validate($request->all(),[
            'name'=>['email','required','min:3','max:10','unique:users'],
            'password'=>['required','min:5']


        ],[
            'email.required'=>'this field is required',
            'email.min'=>'can not be less than 3 letters',
            'email.unique'=>'there is an email in the table',
        ]);

        $u=new User();
        $u->name=$request->input('email');
        $u->save();
        }
}
