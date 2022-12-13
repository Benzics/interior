<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public static function booted() {

        static::deleting(function($category) {
             $category->apartments()->delete();
        });
    }
}
