<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'domain_image',
        'domain',
        'product_title',
        'oder_created_at',
        'city',
        'country',
    ];
}
