<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
   use HasFactory;
    protected $fillable = ['name', 'description', 'price'];
    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }
    public function getTotalRevenueAttribute()
{
    return $this->orders->sum(function($order) {
        return $order->quantity * $order->price;
    });
}
//This is mass assignment protection.
//It tells Laravel which fields are allowed to be filled using methods like
// Product::create($data).
}
