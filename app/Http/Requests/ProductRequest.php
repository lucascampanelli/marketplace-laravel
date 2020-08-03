<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'nome' => 'required',
            'descricao' => 'required|min:30',
            'body' => 'required',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório',
            'min' => 'Este campo deve ter no mínimo :min caracteres'
        ];
    }
}
