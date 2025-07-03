<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Page extends MainModel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'description',
        'image',
        'page',
        'active',
        'order_id',
        'link',
        'video_link',
    ];
    protected $casts = [
        'title' => \App\Casts\UnescapedJson::class,
        'name' => \App\Casts\UnescapedJson::class,
        'description' => \App\Casts\UnescapedJson::class,
    ];

    public function titleLang($lang = null)
    {
        $data = $this->title;
        if ($lang === null) {
            $user = Auth::guard('api')->user();
            $langUser = $user ? $user->lang : app()->getLocale();
            $defaultLang = app()->getLocale();
            return $data[$langUser] ?? $data[$defaultLang] ?? null;
        }
        return $data[$lang] ?? null;
    }
}
