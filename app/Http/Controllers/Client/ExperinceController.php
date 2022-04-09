<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ExperinceController extends Controller
{
    public function show()
    {
        return view('Client.Experince');
    }
}
