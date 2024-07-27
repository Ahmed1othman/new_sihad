<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'name' => 'required|string|min:2|max:150|unique:services,title->en' . $this->id,
                        'feedback' => 'required|string|min:2|unique:services,notes->en' . $this->id,
                        'photo' => 'required|image|mimes:jpeg,bmp,png,jpg|max:4096'
                    ];
                }
            case 'PATCH':
            case 'PUT': {
                    return [
                        'name' => 'required|string|min:2|max:150|unique:services,title->en' . $this->id,
                        'feedback' => 'required|string|min:2|unique:services,notes->en' . $this->id,
                        'photo' => 'sometimes|image|mimes:jpeg,bmp,png,jpg|max:4096'
                    ];
                }
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'name.required' => __('validation.required'),
            'name.string' => __('validation.string'),
            'title.min' => __('validation.min'),
            'name.max' => __('validation.max'),
            'name.regex' => __('validation.regex'),
            'name.unique' => __('validation.unique'),

            'feedback.required' => __('validation.required'),
            'feedback.string' => __('validation.string'),
            'feedback.min' => __('validation.min'),
            'feedback.regex' => __('validation.regex'),
            'feedback.unique' => __('validation.unique'),

            'photo.required' => __('validation.required'),
            'photo.image' => __('validation.image'),
            'photo.mimes' => __('validation.mimes'),
            'photo.max' => __('validation.max'),
        ];
    }
}
