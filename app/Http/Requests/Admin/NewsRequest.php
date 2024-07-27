<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
                        'title' => 'required|string|min:2|max:150|unique:news,title->en'. $this->id,
                        'title_ar' => 'required|string|min:2|max:150|unique:news,title->ar'. $this->id,
                        'tags' => 'required|string|min:2|max:150|unique:news,tags->en'. $this->id,
                        'tags_ar' => 'required|string|min:2|max:150|unique:news,tags->ar'. $this->id,
                        'content' => 'required|string|min:2|unique:news,content->en' . $this->id,
                        'content_ar' => 'required|string|min:2|unique:news,content->ar' . $this->id,
                        'photo' => 'required|image|mimes:jpeg,bmp,png,jpg|max:4096'
                    ];
                }
            case 'PATCH':
            case 'PUT': {
                    return [
                        'title' => 'required|string|min:2|max:150|unique:news,title->en' . $this->id,
                        'title_ar' => 'required|string|min:2|max:150|unique:news,title->ar' . $this->id,
                        'tags' => 'required|string|min:2|max:150|unique:news,tags->en'. $this->id,
                        'tags_ar' => 'required|string|min:2|max:150|unique:news,tags->ar'. $this->id,
                        'content' => 'required|string|min:2|unique:news,content->en' .$this->id,
                        'content_ar' => 'required|string|min:2|unique:news,content->ar' . $this->id,
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


            'title.required' => __('validation.required'),
            'title.string' => __('validation.string'),
            'title.min' => __('validation.min'),
            'title.max' => __('validation.max'),
            'title.regex' => __('validation.regex'),
            'title.unique' => __('validation.unique'),


            'title_ar.required' => __('validation.required'),
            'title_ar.string' => __('validation.string'),
            'title_ar.min' => __('validation.min'),
            'title_ar.max' => __('validation.max'),
            'title_ar.regex' => __('validation.regex'),
            'title_ar.unique' => __('validation.unique'),


            'tags.required' => __('validation.required'),
            'tags.string' => __('validation.string'),
            'tags.min' => __('validation.min'),
            'tags.max' => __('validation.max'),
            'tags.regex' => __('validation.regex'),
            'tags.unique' => __('validation.unique'),


            'tags_ar.required' => __('validation.required'),
            'tags_ar.string' => __('validation.string'),
            'tags_ar.min' => __('validation.min'),
            'tags_ar.max' => __('validation.max'),
            'tags_ar.regex' => __('validation.regex'),
            'tags_ar.unique' => __('validation.unique'),


            'content.required' => __('validation.required'),
            'content.string' => __('validation.string'),
            'content.min' => __('validation.min'),
            'content.regex' => __('validation.regex'),
            'content.unique' => __('validation.unique'),


            'content_ar.required' => __('validation.required'),
            'content_ar.string' => __('validation.string'),
            'content_ar.min' => __('validation.min'),
            'content_ar.regex' => __('validation.regex'),
            'content_ar.unique' => __('validation.unique'),


            'photo.required' => __('validation.required'),
            'photo.image' => __('validation.image'),
            'photo.mimes' => __('validation.mimes'),
            'photo.max' => __('validation.max'),


        ];
    }
}
