<?php

namespace App\Http\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
        return [
		//
		'first_name' => ['required'],
		'last_name' => ['required'],
		//'role' => ['required'],
		'role_number' => ['required'],
		'phone_number' => ['required'],
		'password' => ['required'],
		'confirm_password' => ['required','same:password'],
		//'account_status' => ['required'],
		//'profile_picture' => ['required'],
		'email' => ['required'],
        ];
    }

    public function messages()
{
    return [
        'first_name.required' => 'First name is required.',
        'last_name.required' => 'Last name is required.',
        'email.required' => 'Email address is required.',
        'phone_number.required' => 'Phone number is required.',
        'role_number.required' => 'Registration number is required.',
        'password.required' => 'Password is required.',
        'confirm_password.required' => 'Confirm password is required.',
        'confirm_password.same' => 'Confirm password must match the password.',
        // Uncomment and customize if you use these later
        // 'role.required' => 'Role is required.',
        // 'account_status.required' => 'Account status is required.',
        // 'profile_picture.required' => 'Profile picture is required.',
    ];
}

    public function failedValidation(Validator $validator)
    {

	    $errors = $validator->errors();

	    throw new HttpResponseException(
		
		    response()->view('auth-view.sign-up',[

			    'errors' =>$errors,
			    'old' =>$this->input()
		    ],400)
	    );
    }
}
