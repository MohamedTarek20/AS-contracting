<?php

namespace App\Http\Requests\Dashboard\About;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title_ar" => ['required', 'string', 'max:255'],
            "description_ar" => ['required', 'string', 'max:500'],
            "title_en" => ['required', 'string', 'max:255'],
            "description_en" => ['required', 'string', 'max:500'],
            "title_zh_cn" => ['required', 'string', 'max:255'],
            "description_zh_cn" => ['required', 'string', 'max:500'],
            "image" => ['nullable', 'image'],
        ];
    }
}
