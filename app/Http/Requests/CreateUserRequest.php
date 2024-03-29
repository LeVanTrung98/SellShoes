<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            // 'password'=>'required',
            // 'role_id'=>'required|numeric',
            // 'tel'=>'required|numeric',
            // 'address'=>'required',
            // 'gender'=>'required',
            // 'dayofbirth'=>'nullable'
        ];
    }

    public function messages(){
        return[
            'name.required'=>'Không để trống trường này!',
            'email.email'=>'Không phải là Email',
        ];
    }
}
