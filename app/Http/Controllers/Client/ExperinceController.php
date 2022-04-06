<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExperinceController extends Controller
{
    public function show()
    {
        return view('Client.Experince');
    }
}
