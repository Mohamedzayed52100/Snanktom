<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientLoginReguest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'name'=>'required',
            'phone'=>'required',

            ];
    }
    public function messages():array
    {
        return [
            'name.required'=>'هذا الاسم مطلوب',
            'phone.required'=>'هذا الهاتف مطلوب',
        ];
    }
    public function attributes():array{
        //chane the nam e in validation
        return [
            'name'=>'full name',
            'phone'=>'number phone',
        ];

    }
}
