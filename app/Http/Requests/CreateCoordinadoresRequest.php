<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCoordinadoresRequest extends FormRequest
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
            'nombre' => ['required','max:30'],
            'paterno' => ['required','max:30'],
            'materno' => ['required','max:30'],
            'email' => ['required','max:80'],
            'telefono' => ['required','max:10'],
            'grado' => ['required','max:8'],
            'carrera' => ['required','max:50']
            ];
    }

    public function messages(){
        return ['nombre.required' => 'El nombre no puede ir vacio'];
    }
}
