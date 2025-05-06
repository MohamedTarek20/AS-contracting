<?php

namespace App\Http\Requests\Dashboard\Slider;

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
            'title_ar'              => ['required', 'string', 'min:1', 'max:255'],
            'title_en'              => ['required', 'string', 'min:1', 'max:255'],
            'title_zh_cn'           => ['required', 'string', 'min:1', 'max:255'],
            'description_ar'        => ['required', 'string', 'min:1', 'max:2000'],
            'description_en'        => ['required', 'string', 'min:1', 'max:2000'],
            'description_zh_cn'     => ['required', 'string', 'min:1', 'max:2000'],
            'image'                 => ['nullable', 'image', 'max:2048'],
            'url'                   => ['nullable', 'url', 'min:1', 'max:255'],
        ];
    }
}
