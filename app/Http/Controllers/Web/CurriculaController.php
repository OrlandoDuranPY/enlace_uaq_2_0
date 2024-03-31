<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurriculaController extends Controller
{
    public function index(){
        return view('web.curricula.index');
    }
}
