<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    protected $appends = [
        'image_full_path',
    ];

    /**
     * @return string
     */
    public function getImageFullPathAttribute()
    {
        return Storage::url('uploads/testimonials/' . $this->image);
    }
}
