<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
