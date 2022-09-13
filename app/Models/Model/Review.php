<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ["star", "customer", "review"];

    protected $casts = array(
        "product_id" => "integer",
        "star" => "integer",
    );

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
