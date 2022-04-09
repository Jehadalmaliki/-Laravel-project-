<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class serviceController extends Controller
{
    //
    public function show()
    {
        return view('admin.service');
    }
    public function insert(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:10'],
            'description'=>['required','min:3','max:50'],
            'image'=>['required'],


        ],[
            'name.required'=>'this field name is required',
            'name.min'=>'can not be less than 3 letters',
            'description.required'=>'this field description is required',
            'description.min'=>'can not be less than 3 letters',
            'image.required'=>'this field image is required',



        ]);

        $u=new service();
        $u->name=$request->name;
        $u->image=$request->image;
        $u->description=$request->description;
        if($u->save())
        return redirect()->route('admincompany')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
}
