<?php

namespace App\Http\Requests;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueImageName;
use App\Models\GalleryModel;


class AdminUploadGalleryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'uploadedImage' => 'required',
            'title' => 'required|string',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'uploadedImage.required' => 'Το πεδίο είναι υποχρεωτικό.',
            'title.required' => 'Το πεδίο είναι υποχρεωτικό.',
            'description.required' => 'Επιλέξτε εικόνα για αναίβασμα.'
        ];
    }
}
