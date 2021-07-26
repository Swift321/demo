<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RevValidates extends FormRequest
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
            'title' => 'required|max:50',
            'coment' => 'required|max:100',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'coment' => 'コメント',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => ':attribute は必須です',
            'coment.required' => ':attribute は必須です',
        ];
    }
}
