<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VotingRequest extends FormRequest
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
	
		'chairperson'      => ['required'],
		'vice-chair'       => ['required'],
		'secretary'        => ['required'],
		'sports-and-welfare' => ['required'],
		'academic'         => ['required'],
        ];
    }
}
