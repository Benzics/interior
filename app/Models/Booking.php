<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'name', 'product_id', 'apartment_id', 'status', 'created_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
