<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check() && Auth::user()->isAdmin())
            return true;
        else
            return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image'
        ];
    }
}
