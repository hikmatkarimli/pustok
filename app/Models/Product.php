<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function basket(): HasOne
    {
        return $this->hasOne(Basket::class);
    }

    public function order_item(): HasOne
    {
        return $this->hasOne(Order_item::class);
    }

    public function wishlist(): HasOne
    {
        return $this->hasOne(Wishlist::class);
    }
}
