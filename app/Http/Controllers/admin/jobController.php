<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\company;
use App\Models\admin\job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class jobController extends Controller
{
    //
    public function show()
    {$company = DB::select('select * from company');
        return view('admin.Job',['company'=>$company]);
    }
    public function master()
    {
        return view('admin.master');
    }
    public function insert(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:10'],
            'caree_level'=>['required','min:3','max:50'],
            'image'=>['required'],
            'governement'=>['required','min:3','max:50'],
            'description'=>['required','min:3','max:50'],
            'start_date'=>['required'],
            'expirt_date'=>['required'],
            'file'=>['required'],



        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters',
            'governement.min'=>'can not be less than 3 letters',
            'description.required'=>'this field is required',
            'description.min'=>'can not be less than 3 letters',
            'governement.required'=>'this field is required',
            'start_date.required'=>'this field is required',
            'expirt_date.required'=>'this field is required',
            'image.required'=>'this field is required',
            'file.required'=>'this field is required',



        ]);

        $u=new job();
        $u->name=$request->name;
        $u->image=$request->image;
        $u->description=$request->description;
        $u->caree_level=$request->caree_level;
        $u->start_date=$request->start_date;
        $u->expirt_date=$request->expirt_date;
        $u->file=$request->file;
        $u->sector=$request->sector;
        $u->governement=$request->governement;
        $u->responsblite=$request->responsblite;
        $u->company_id=$request->company_id;
        if($u->save())
        return redirect()->route('User')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
}
