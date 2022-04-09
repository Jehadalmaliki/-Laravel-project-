<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\connectus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class connectusController extends Controller
{
    //
    public function show()
    {
        return view('admin.connectus');
    }
    public function insert(Request $request){

        Validator::validate($request->all(),[
            'email'=>['required','min:3','max:30'],
            'message'=>['required','min:3','max:50'],




        ],[
            'email.required'=>'this field is required',
            'email.min'=>'can not be less than 3 letters',
            'message.min'=>'can not be less than 3 letters',
            'message.required'=>'this field is required',



        ]);

        $u=new connectus();
        $u->email=$request->email;
        $u->message=$request->message;

        if($u->save())
        return redirect()->route('admincompany')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }

}
