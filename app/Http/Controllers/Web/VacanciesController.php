<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    public function index(){
        return view('web.vacancies.index');
    }
}