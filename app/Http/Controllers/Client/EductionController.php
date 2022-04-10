<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Client\eduction;
class EductionController extends Controller
{
    public function show()
    {
        $user=User::all();
        return view('Client.Eduction',['user'=>$user]);
    }
    public function insert(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:30'],
            'Description'=>['required','min:3','max:50'],
            'University'=>['required'],
            'Date'=>['required'],
            'Year'=>['required'],




        ],[
            'name.required'=>'this field megior is required',
            'name.min'=>'can not be less than 3 letters',
            'Description.min'=>'can not be less than 3 letters',
            'Description.required'=>'this field description is required',
            'University.required'=>'this field  University is required',
            'Date.required'=>'this field  Date is required',
            'Year.required'=>'this field  Year is required',




        ]);

        $u=new eduction();
        $u->name=$request->name;
        $u->Description=$request->Description;
        $u->University=$request->University;
        $u->Date=$request->Date;
        $u->Year=$request->Year;
        $u->user_id=$request->user_id;

        if($u->save())
        return redirect()->route('admincompany')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }

}
