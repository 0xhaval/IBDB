<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
        $rules = [
            'title' => 'required|max:100|string',
            'description' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'pages' => 'required',
            'isbn' => 'nullable',
            'author' => 'nullable'
        ];

        if ($this->getMethod() == "POST") {
            $rules += ['image' => 'required|image|mimes:png,jpg,gif'];
        }

        if ($this->getMethod() == "PUT") {
            $rules += ['image' => 'nullable|image|mimes:png,jpg,gif'];
        }

        return $rules;
    }
}
