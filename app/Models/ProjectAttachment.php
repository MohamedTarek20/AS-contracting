<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProjectAttachment extends Model
{
    protected $fillable = [
        'project_id',
        'type',
        'attachment',
    ];

    protected $appends = ['attachment_full_path'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * @return string
     */
    public function getAttachmentFullPathAttribute()
    {
        return Storage::url('uploads/projects/' . $this->attachment);
    }
}
