<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['category_name'];

    public function category()
    {
        return $this->hasMany(Product::class);
    }
}
