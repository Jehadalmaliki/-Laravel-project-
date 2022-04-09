<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class serviceController extends Controller
{
    //
    public function show()
    {
        return view('admin.service');
    }
}
