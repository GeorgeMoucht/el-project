<?php

namespace App\Http\Requests;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueImageName;

class AdminUploadGalleryRequest extends FormRequest
{
 
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return GalleryModel::where('image_name', $value)->count() === 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The image name already exists in the database.';
    }
}
