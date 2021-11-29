<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCalzado extends FormRequest
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

    public function rules()
    {
        return $this->reglas();
    }

    public function reglas()
    {
        return [
            'talla' => 'required|integer',
            'marca' => 'required|string|max:2000',
            'precio' => 'required|integer',
            'color' => 'required|string|max:255',
        ];
    }
}
