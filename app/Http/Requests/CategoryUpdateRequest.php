<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'title'=>'required',
            'slug'=>'min:3',
            'id_parent'=>'required|integer|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Название обязательное поле',
        ];
    }
}
