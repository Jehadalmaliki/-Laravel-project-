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
    public function index(){
        $job=job::orderBy('id','desc')->get();
        return view('admin.Job.list_Job')
        ->with('job',$job)
        ;

    }
    public function edit($c_id){
        $job=job::find($c_id);
        $company=company::all();
        return view('admin.Job.edit',['company'=>$company,'job'=>$job]);
        ;

    }
    public function update(Request $request,$cat_id){
        $u=job::find($cat_id);
        $u->name=$request->name;
        $u->description=$request->description;
        $u->is_active=$request->is_active;
        $u->caree_level=$request->caree_level;
        $u->start_date=$request->start_date;
        $u->expirt_date=$request->expirt_date;
        $u->file=$request->file;
        $u->sector=$request->sector;
        $u->governement=$request->governement;
        $u->responsblite=$request->responsblite;
        $u->company_id=$request->company_id;
        if($request->hasFile('image'))
        $u->image=$this->uploadFile($request->file('image'));
        if($u->save())
        return redirect()->route('list_job')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);
    }
    public function toggle($cat_id){

        $c=job::find($cat_id);
        $c->is_active*=-1;
        if($c->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);

    }
    public function show()
    { //$company = DB::select('select * from company');
        $company=company::all();
        return view('admin.Job.Job',['company'=>$company]);
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
        $u->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default_category.png";
        $u->description=$request->description;
        $u->caree_level=$request->caree_level;
        $u->start_date=$request->start_date;
        $u->expirt_date=$request->expirt_date;
        $u->file=$request->file;
        $u->sector=$request->sector;
        $u->governement=$request->governement;
        $u->responsblite=$request->responsblite;
        $u->company_id=$request->company_id;
        $u->is_active=$request->is_active;
        if($u->save())
        return redirect()->route('User')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
    public function uploadFile($file){
        $dest=public_path()."/images/";

        //$file = $request->file('image');
        $filename= time()."_".$file->getClientOriginalName();
        $file->move($dest,$filename);
        return $filename;

    }
}
