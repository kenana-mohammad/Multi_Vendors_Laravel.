<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name',
    'ProductCategoryId',
    'status',
    'photo',
    'photoslider',
    'description',
    'price',
    'hasoffer',
    'discount',
    'Expdate',



    ];
    protected $table = 'products';
    protected $hidden=['created_at','updated_at'];


    public function ProductCategory(){
        return $this->belongsTo(ProductCategory::class);
    }
}
