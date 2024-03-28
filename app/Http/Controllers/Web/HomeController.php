<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* ========================================
    Vista Home
    ========================================= */
    public function index(){
        return view('web.index');
    }
}
