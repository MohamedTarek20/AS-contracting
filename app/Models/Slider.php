<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $fillable = [
        'title_ar',
        'title_en',
        'title_zh_cn',
        'description_ar',
        'description_en',
        'description_zh_cn',
        'image',
        'url'
    ];

    protected $appends = [
        'title',
        'description',
        'image_full_path',
    ];

    /**
     * @return string
     */
    public function getTitleAttribute()
    {
        if (app()->getLocale() == 'en') {
            return $this->title_en;
        } else if(app()->getLocale() == 'zh-CN') {
            return $this->title_zh_cn;
        }else {
            return $this->title_ar;
        }
    }

    /**
     * Summary of getDescriptionAttribute
     * @return string
     */

    public function getDescriptionAttribute()
    {
        if (app()->getLocale() == 'en') {
            return $this->description_en;
        } else if(app()->getLocale() == 'zh-CN') {
            return $this->description_zh_cn;
        }else {
            return $this->description_ar;
        }
    }

    /**
     * @return string
     */
    public function getImageFullPathAttribute()
    {
        return Storage::url('uploads/sliders/' . $this->image);
    }

}
