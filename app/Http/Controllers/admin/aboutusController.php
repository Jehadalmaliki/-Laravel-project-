<?php

namespace App\Http\Controllers\admin;

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
}
