<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Client\social;
use App\Models\User;
class SocialController extends Controller
{
    //
    public function show()
    {
        $user=User::all();
        return view('Client.Social',['user'=>$user]);
    }
    public function insert(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:30'],
            'Link'=>['required','min:10','max:50'],
            'image'=>['required'],


        ],[
            'name.required'=>'this field megior is required',
            'name.min'=>'can not be less than 3 letters',
            'Link.min'=>'can not be less than 3 letters',
            'Link.required'=>'this field description is required',
            'image.required'=>'this field  image is required',

        ]);

        $u=new social();
        $u->name=$request->name;
        $u->Link=$request->Link;
        $u->image=$request->image;
        $u->user_id=$request->user_id;

        if($u->save())
        return redirect()->route('admincompany')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
}
