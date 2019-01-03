<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    protected $guarded = [];
    
    public function searchableAs()
    {
        return 'products_index';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // not used
    // public function cart () {
    //     return $this->belongsToMany(User::class, 'carts', 'product_id', 'user_id')->withPivot('quantity')->withTimestamps();
    // }
    public function reviews()
    {
        return $this->hasMany(\App\Review::class);
    }
    
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product', 'product_id', 'order_id');
    }
}
