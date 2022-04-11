<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class companyController extends Controller
{
    //
    public function index(){
        $company=company::orderBy('id','desc')->get();
        return view('admin.company.list_company')
        ->with('company',$company)
        ;

    }
    public function edit($c_id){
        $company=company::find($c_id);
        return view('admin.company.edit')
        ->with('company',$company);

    }
    public function update(Request $request,$cat_id){
        $u=company::find($cat_id);
        $u->name=$request->name;
        $u->description=$request->description;
        $u->is_active=$request->is_active;
        if($request->hasFile('image'))
        $u->image=$this->uploadFile($request->file('image'));
        if($u->save())
        return redirect()->route('list_company')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);
    }
    public function toggle($cat_id){

        $c=company::find($cat_id);
        $c->is_active*=-1;
        if($c->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);

    }
    public function show()
    {
        return view('admin.company.company');
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
        $u->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default_category.png";
        $u->description=$request->description;
        $u->is_active=$request->is_active;
        if($u->save())
        return redirect()->route('User')
        ->with(['success'=>'company created successful']);
        return back()->with(['error'=>'can not create company']);

    }
    public function uploadFile($file){
        $dest=public_path()."/images/";

        //$file = $request->file('image');
        $filename= time()."_".$file->getClientOriginalName();
        $file->move($dest,$filename);
        return $filename;

    }
}
