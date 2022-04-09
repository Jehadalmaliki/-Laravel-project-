<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CourseController extends Controller
{
    public function show()
    {
        return view('Client.Course');
    }
    public function master()
    {
        return view('Client.master');
    }
}
