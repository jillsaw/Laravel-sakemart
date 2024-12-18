<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory, Sortable;

    public function category()
    {
       return $this->belongsTo(Category::class);
    }

    //商品とレビュー紐づけ
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    //userとproductの中間テーブル
    public function favorited_users()
    {
        return $this->belongMany(User::class)->withTimestmps();
    }
}
