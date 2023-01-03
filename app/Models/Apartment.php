<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'user_id', 'apartment_category_id', 'price', 'portrait'];

    protected $casts = [
        'description' => CleanHtml::class,
    ];

    public function category()
    {
        return $this->belongsTo(ApartmentCategory::class, 'apartment_category_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public static function booted() {

        static::deleting(function($apartment) {
            $apartment->images()->delete();
        });
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
