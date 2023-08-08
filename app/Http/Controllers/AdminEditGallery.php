<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryModel;

class AdminEditGallery extends Controller
{
    public function render()
    {
        return view('admin.edit-gallery');
    }

    public function uploadImage(Request $request)
    {
        // Save the image into the storage.
        if($request->hasFile('uploadedImage')) {
            $destination_path = "public/images/gl";
            $image = $request->file('uploadedImage');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('uploadedImage')->storeAs($destination_path,$image_name);
        
            $input['uploadedImage'] = $image_name;

            $gallery = new GalleryModel();
            $gallery->image_name = $image_name;

            $gallery->save();
        }

        // Redirect back to edit-gallery view.
        return redirect()->route('admin.edit-gallery');
    }


}
