<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveVoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        if($this->isMethod('PATCH')){ //editar

        }
        return [
            //
            'name'=> ['required', 'min:4','max:20'],
            'detalle'=> ['required'],
            'imagen'=> ['mimes:jpeg,png,jpg,pdf,doc,docx'],
            'total'=> ['required', 'numeric','min: 1','max: 999'],

        ];
    }
}
