<?php

namespace App\Http\Requests\Admin\Setting;

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
     * @return array
     */
    public function rules()
    {
        return [
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'website_name' => 'nullable|max:255',
            'description' => 'nullable',
            'phone' => 'max:255', 
            'email' => 'nullable|email|max:255',
            'working_hours' => 'nullable',
            'map_key' => 'nullable',
            'twitter' => 'nullable',
            'facebook' => 'nullable',
            'google' => 'nullable',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
            'footer_text' => 'nullable|max:255',
        ];
    }
}
