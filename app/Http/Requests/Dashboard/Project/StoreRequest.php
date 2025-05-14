<?php

namespace App\Http\Requests\Dashboard\Project;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title_ar'              => ['required', 'string', 'min:1', 'max:255'],
            'title_en'              => ['required', 'string', 'min:1', 'max:255'],
            'title_zh_cn'           => ['required', 'string', 'min:1', 'max:255'],
            'description_ar'        => ['required', 'string', 'min:1', 'max:2000'],
            'description_en'        => ['required', 'string', 'min:1', 'max:2000'],
            'description_zh_cn'     => ['required', 'string', 'min:1', 'max:2000'],
            'images'                => ['required', 'array'],
            'images.*'              => ['required_with:images', 'image', 'max:2048'],
            'videos'                => ['sometimes', 'array'],
            'videos.*'              => ['required_ with:videos','file','mimes:mp4,webm,ogg,mov,avi,wmv,mpeg,3gp,3g2,flv,mkv','max:51200']

        ];
    }
}
