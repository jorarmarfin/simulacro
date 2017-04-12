<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDatosRequest extends FormRequest
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
            'paterno'=>'required',
            'materno'=>'required',
            'nombres'=>'required',
            'fecha_nacimiento'=>'required',
            'idsexo'=>'required',
            'idgrado'=>'required',
            'idsede'=>'required',
            'idespecialidad'=>'required',
        ];
    }

}