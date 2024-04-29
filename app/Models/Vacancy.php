<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_location',
        'job_title',
        'salary',
        'schedule',
        'description',
        'observations',
        'contact_phone',
        'contact_email',
    ];

    /* ========================================
    Crear el slug
    ========================================= */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($item) {
            $item->slug = self::makeUniqueSlug($item->company_name . '-' . $item->job_title, $item->id);
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
}
