<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\GalleryModel;

class UniqueImageName implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure  $fail
     * @return void
     */
    public function validate($attribute, $value, $fail)
    {
        $count = GalleryModel::where('image_name', $value)->count();
        
        if ($count > 0) {
            $fail('The image name already exists in the database.');
        }
    }
}
