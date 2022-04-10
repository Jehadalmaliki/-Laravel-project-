<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Client\skill;
use App\Models\User;
class SkillController extends Controller
{
    public function show()
    {
        $user=User::all();
        return view('Client.Skill',['user'=>$user]);
    }
    public function insert(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:30'],
            'progrse'=>['required','min:1','max:4'],



        ],[
            'name.required'=>'this field megior is required',
            'name.min'=>'can not be less than 3 letters',
            'progrse.min'=>'can not be less than 0 number',
            'progrse.required'=>'this field description is required',


        ]);

        $u=new skill();
        $u->name=$request->name;
        $u->progrse=$request->progrse;

        $u->user_id=$request->user_id;

        if($u->save())
        return redirect()->route('admincompany')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
}
