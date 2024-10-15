<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'description',
        'price',
        'stock',
        'image',
    ];
}