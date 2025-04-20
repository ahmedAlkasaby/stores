<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MainModel extends Model
{
    use HasFactory ;

    protected $casts = [
        'name' => \App\Casts\UnescapedJson::class,
        'description' => \App\Casts\UnescapedJson::class,
    ];


    public function nameLangApi($lang = null)
    {
        $data = $this->name;
        if ($lang === null) {
            $user = Auth::guard('api')->user();
            $langUser = $user ? $user->lang : app()->getLocale();
            $defaultLang = app()->getLocale();
            return $data[$langUser] ?? $data[$defaultLang] ?? null;
        }
        return $data[$lang] ?? null;
    }

    public function descriptionLangApi($lang = null)
    {
        $data = $this->description;
        if ($lang === null) {
            $user = Auth::guard('api')->user();
            $langUser = $user ? $user->lang : app()->getLocale();
            $defaultLang = app()->getLocale();
            return $data[$langUser] ?? $data[$defaultLang] ?? null;
        }
        return $data[$lang] ?? null;
    }
}
