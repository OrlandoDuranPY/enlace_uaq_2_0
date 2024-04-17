<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curricula extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'academic_achievement' => 'array',
        'study_level' => 'array',
        'main_degree' => 'array',
        'experience' => 'array',
        'project' => 'array',
        'reference' => 'array',
    ];

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'about_me',
        'study_program_id',
        'semester',
        'academic_achievement',
        'academic_program',
        'study_level',
        'main_degree',
        'experience',
        'project',
        'reference',
        'type',
        'company_id',
    ];

    /* ========================================
    Relaciones con otras tablas
    ========================================= */
    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
