<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'small_description',
        'description',
        'regular_price',
        'sale_price',
        'image',
        'qty',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];



    function category(){

    return $this->belongsTo(Category::class,'category_id','id');
    }
}
