<?php


namespace App\Http\Request;


use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize() {
        return true;
    }
    public function rules() {
        $rules = [
            'title' => 'required',
            'description' => 'required|string',
            'user_id' => 'numeric',
        ];
        return $rules;
    }
}
