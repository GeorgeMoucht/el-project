<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUploadGalleryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:50',
            'text' => 'required|string|max:100',
            'uploadedImage' => 'required|image|mimes:jpeg,png,jpg,gif'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Το πεδίο είναι απαραίτητο.',
            'text.required' => 'Το πεδίο είναι απαραίτητο.',
            'uploadedImage.required' => 'Το πεδίο είναι απαραίτητο.',
            
            'title.string' => 'Παρακαλώ συμπληρώστε το πεδίο μόνο με χαρακτήρες.',
            'text.string' => 'Παρακαλώ συμπληρώστε το πεδίο μόνο με χαρακτήρες.',
            'uploadedImage.image' => 'Το αρχείο πρέπει να είναι εικόνα jpeg, png, jpg ή gif.',

            'title.max' => 'Ο τίτλος πρέπει να είναι μέχρι 50 χαρακτήρες',
            'text.max' => 'Το κείμενο μπορεί να είναι μέχρι 100 χαρακτήρες',
            'uploadedImage' =>  'Το αρχείο πρέπει να είναι εικόνα jpeg, png, jpg ή gif.'
        ];
    }
}
