<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class companyController extends Controller
{
    //
    public function show()
    {
        return view('admin.company');
    }
}
