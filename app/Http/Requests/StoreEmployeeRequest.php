<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'date_of_birth' => 'required|max:20',
            'education_qualification' => 'required|max:255',
            'address' => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required|unique:employees|numeric',
            'photo' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
            'resume' => 'file|mimes:doc,docx,pdf|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'The First name field is required.',
            'firstname.max' => 'The First name field must not exceed 255 characters.',
            'lastname.required' => 'The Last name field is required.',
            'lastname.max' => 'The Last name field must not exceed 255 characters.',
            'date_of_birth.required' => 'The DOB field is required.',
            'date_of_birth.max' => 'The DOB field must not exceed 20 characters.',
            'date_of_birth.required' => 'The Education field is required.',
            'date_of_birth.max' => 'The Education field must not exceed 255 characters.',
            'address.required' => 'The Address field is required.',
            'email.required' => 'The Email field is required.',
            'email.email' => 'Please enter a valid Email address.',
            'email.unique' => 'The Email address is already in use.',
            'phone.required' => 'The Mobile field is required.',
            'phone.unique' => 'The Mobile Number is already in use.',
            'photo.mimes' => 'The Photo field must be a file of type: jpeg, png, jpg, gif.',
            'resume.mimes' => 'The Photo field must be a file of type: doc,docx,pdf.',
        ];
    }
}
