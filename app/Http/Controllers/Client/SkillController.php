<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Client\skill;
use App\Models\User;
class SkillController extends Controller
{
    public function index(){
        $user=User::all();
        $skill=skill::orderBy('id','desc')->get();
        return view('Client.Skill.Skill',['user'=>$user ,'skill'=>$skill]);



    }
    public function edit($c_id){
        $skill=skill::find($c_id);
        $User=User::all();
        return view('Client.Skill.edit',['User'=>$User,'skill'=>$skill]);
        ;

    }
    public function update(Request $request,$cat_id){
        $u=skill::find($cat_id);
        $u->name=$request->name;
        $u->progrse=$request->progrse;
        $u->is_active=$request->is_active;
        $u->user_id=$request->user_id;
        if($u->save())
        return redirect()->route('list_skill')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);
    }
    public function toggle($cat_id){

        $c=skill::find($cat_id);
        $c->is_active*=-1;
        if($c->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);

    }
    public function show()
    {   $skill=skill::orderBy('id','desc')->get();
        $user=User::all();
        return view('Client.Skill.Skill',['user'=>$user ,'skill'=>$skill]);
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
        $u->is_active=$request->is_active;
        $u->user_id=$request->user_id;

        if($u->save())
        return redirect()->route('admincompany')
        ->with(['success'=>'skill created successful']);
        return back()->with(['error'=>'can not create skill']);

    }
}
