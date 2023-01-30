<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'products';

    protected $fillable = [
        'title',
        'sku',
        'description',
        'category',
        'compare_price',
        'selling_price',
        'quantity',
        'admin',
        'tag',
        'image',
    ];
}
