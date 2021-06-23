<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class regrequest extends FormRequest
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
            'fname' => ['required','regex:/^[a-zA-Z]+$/u'],
            'uname' => ['required','min:3','max:30','unique:user'],
            'email' => ['required','email','unique:user','min:3','max:30','email:rfc'],
            'cname' => ['required','min:3','max:30'],
            'pnumber' => ['required','min:11','max:15'],
            'city' => ['required','min:3','max:30'],
            'country' => ['required','min:3','max:30'],
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'cpassword' => ['required', 'same:password']
        ];
        
    }
}
