<?php

namespace App\Http\Requests\Dashboard\ProjectAttachment;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['sometimes', 'image', 'max:2048'],
            'video' => ['sometimes', 'file', 'mimes:mp4,webm,ogg,mov,avi,wmv,mpeg,3gp,3g2,flv,mkv', 'max:51200'],
        ];
    }
}
