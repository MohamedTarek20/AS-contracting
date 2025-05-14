<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    protected $fillable = [
        'title_ar',
        'title_en',
        'title_zh_cn',
        'description_ar',
        'description_en',
        'description_zh_cn',
        'image'
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

    public function attachments()
    {
        return $this->hasMany(ProjectAttachment::class);
    }

    public function images()
    {
        return $this->attachments()->where('type', 'image');
    }


    public function videos()
    {
        return $this->attachments()->where('type', 'video');
    }



    public function defaultImage()
    {
        return $this->hasOne(ProjectAttachment::class)->where('type', 'image');
    }

}
