<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function users(){
        return view('admin.users');
    }

    public function companies(){
        return view('admin.companies');
    }

    public function studyPrograms(){
        return view('admin.study-programs');
    }
}
