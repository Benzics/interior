<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'subtitle', 'content', 'url', 'button_text'];

    public function images()
    {
        return $this->hasMany(SectionImage::class);
    }
}
