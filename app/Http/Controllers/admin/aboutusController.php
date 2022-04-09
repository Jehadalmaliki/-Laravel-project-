<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\aboutus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class aboutusController extends Controller
{
    //
    public function show()
    {
        return view('admin.aboutus');
    }
    public function insert(Request $request){

        Validator::validate($request->all(),[
            'title'=>['required','min:3','max:30'],
            'description'=>['required','min:3','max:50'],
            'image'=>['required'],




        ],[
            'title.required'=>'this field title is required',
            'title.min'=>'can not be less than 3 letters',
            'description.min'=>'can not be less than 3 letters',
            'description.required'=>'this field description is required',
            'image.required'=>'this field  image is required',



        ]);

        $u=new aboutus();
        $u->title=$request->title;
        $u->description=$request->description;
        $u->image=$request->image;

        if($u->save())
        return redirect()->route('admincompany')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }

}
