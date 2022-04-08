<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class jobController extends Controller
{
    //
    public function show()
    {
        return view('admin.Job');
    }
    public function master()
    {
        return view('admin.master');
    }
}
