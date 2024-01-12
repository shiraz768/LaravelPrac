<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_students(): view{
        $students = DB::select('select * from students');
        return view('layouts.table',['students' => $students]);
    }
}
