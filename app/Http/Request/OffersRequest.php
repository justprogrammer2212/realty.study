<?php


namespace App\Http\Request;


use Illuminate\Foundation\Http\FormRequest;

class OffersRequest extends FormRequest
{
    public function authorize() {
        return true;
    }
    public function rules() {
        $rules = [
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ];
        return $rules;
    }
}
