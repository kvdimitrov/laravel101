<?php

namespace App\Http\Requests;

class ArticleRequest extends Request
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
        $rules =  [
            'title' => 'required|min:3',
            'body' => 'required|min:5|max:255',
            'published_at' => 'required|date'
        ];

        return $rules;
    }
}
