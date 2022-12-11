<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'user_id', 'category_id'];

    protected $casts = [
        'description' => CleanHtml::class,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
