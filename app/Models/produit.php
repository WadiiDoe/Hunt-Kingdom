<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{

    protected $table='produit';
    protected $fillable = [
        'name',
        'price',
        'description',

        'category_id',

        'image',
        
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
