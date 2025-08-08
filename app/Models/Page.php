<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Page extends MainModel
{

    protected $fillable = [
        'name',
        'description',
        'image',
        'type',
        'active',
        'order_id',
    ];

    protected $casts = [
        'name' => \App\Casts\UnescapedJson::class,
        'description' => \App\Casts\UnescapedJson::class,
        "title" => \App\Casts\UnescapedJson::class
    ];
    public function scopeFilter($query, $request = null, $type_app = 'app')
    {
        $request=$request??request();

        $query->orderBy('order_id','asc');

        $filters = $request->only(['active', 'type']);

        $query->mainApplyDynamicFilters($filters);

        $query->mainSearch($request->input('search'));

    }
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
