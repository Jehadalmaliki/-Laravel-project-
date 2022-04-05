<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show()
    {
        return view('admin.Course');
    }
    public function master()
    {
        return view('admin.master');
    }
}
