<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'url' => ['required', 'string', 'url', 'unique:sites,url'],
            'tags' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'active' => ['required', 'bool'],
        ];
    }
}
