<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = array(
        "discount" => "integer",
        "stock" => "integer",
        "price" => "integer",
    );

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
