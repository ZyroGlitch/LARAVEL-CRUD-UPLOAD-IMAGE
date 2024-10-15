<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'product',
        'description',
        'price',
        'quantity',
        'subtotal',
        'img'
    ];
}