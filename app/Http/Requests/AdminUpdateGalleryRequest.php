<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateGalleryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'editTitle' => 'required|string',
            'editDescription' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'editTitle.required' => 'Το πεδίο τίτλου είναι υποχρεωτικό.',
            'editDescription.required' => 'Το πεδίο περιγραφής είναι υποχρεωτικό.'
        ];
    }
}