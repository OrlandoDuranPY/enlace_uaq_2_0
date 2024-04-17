<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curriculum extends Model
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
    ];

    /* ========================================
    Crear el slug
    ========================================= */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($item) {
            $item->slug = self::makeUniqueSlug($item->name. '-'.$item->last_name, $item->id);
        });
    }

    private static function makeUniqueSlug($title, $id = null)
    {
        $slug = Str::slug($title);

        if ($id) {
            $existing = self::where('slug', $slug)->where('id', '!=', $id)->count();
        } else {
            $existing = self::where('slug', $slug)->count();
        }

        $suffix = 2;

        while ($existing > 0) {
            $newSlug = $slug . '-' . $suffix;
            if ($id) {
                $existing = self::where('slug', $newSlug)->where('id', '!=', $id)->count();
            } else {
                $existing = self::where('slug', $newSlug)->count();
            }
            $suffix++;
        }

        return isset($newSlug) ? $newSlug : $slug;
    }

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
