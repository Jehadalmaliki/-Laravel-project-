<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class companyController extends Controller
{
    //
    public function show()
    {
        return view('admin.company');
    }
    public function insert(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:10'],
            'description'=>['required','min:3','max:50'],


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters',
            'description.required'=>'this field is required',
            'description.min'=>'can not be less than 3 letters',



        ]);

        $u=new company();
        $u->name=$request->name;
        $u->image=$request->image;
        $u->description=$request->description;
        if($u->save())
        return redirect()->route('User')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
}
