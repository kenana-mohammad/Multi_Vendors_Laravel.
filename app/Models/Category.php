<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','photo','status',
    ];
    public function subcategory(){
        return $this->hasMany(subcategory::class);
    }
    public function store(){
        return $this->hasMany(store::class);
    }
}
