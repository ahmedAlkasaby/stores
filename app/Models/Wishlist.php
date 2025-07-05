<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends MainModel
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $request = null, $type_app = 'app')
    {
        $request = $request ?? request();
        if($request->has("user_id")){
            $query->where('user_id', $request->user_id);
        }
        if($request->has("product_id")){
            $query->where('product_id', $request->product_id);
        }
        return $query;

    }
}
