<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurriculaController extends Controller
{
    /* ========================================
    Dashboard de curriculums
    ========================================= */
    public function index(){
        return view('web.curricula.index');
    }

    /* ========================================
    Vista para registrar estudiante
    ========================================= */
    public function createStudentCurriculum(){
        return view('web.curricula.student.create');
    }

    /* ========================================
    Vista para registrar docente
    ========================================= */
    public function createTeacherCurriculum(){
        return view('web.curricula.teacher.create');
    }
}
