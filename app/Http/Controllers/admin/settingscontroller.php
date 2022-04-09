<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class settingscontroller extends Controller
{
    //
    function generateRules(){
       Role::create([
            'name' => 'super_admin',
            'display_name' => 'اداره النظام', // optional
           // 'description' => 'User is the owner of a given project', // optional
        ]);
        Role::create([
            'name' => 'admin',
            'display_name' => 'اداره المحتوى', // optional
           // 'description' => 'User is the owner of a given project', // optional
        ]);
        Role::create([
            'name' => 'client',
            'display_name' => 'اداره العملاء', // optional
           // 'description' => 'User is the owner of a given project', // optional
        ]);

    }
}
