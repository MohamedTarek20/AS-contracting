<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image'
    ];


    protected $appends = [
        'image_full_path',
    ];

    // Appends

    /**
     * @return string
     */
    public function getImageFullPathAttribute(){
        return Storage::url('uploads/partners/' . $this->image);
    }
}
