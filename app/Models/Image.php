<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
