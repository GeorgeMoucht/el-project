<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryModel;
use App\Http\Requests\AdminUploadGalleryRequest;

class AdminEditGallery extends Controller
{

    public function render()
    {
        $data = GalleryModel::all();

        return view('admin.edit-gallery', ['gallery_images'=>$data]);
    }

    // Post data function.
    // We want to retrieve the posted image from the form
    // save the image into
    // storage/app/public/images/gl directory
    // And store the image name into gallery table on our database.
    public function uploadImage(AdminUploadGalleryRequest $request)
    {   

        // Check if there is a posted image to be stored.
        if($request->hasFile('uploadedImage')) {
            // Save the image into the storage.
            $destination_path = "public/images/gl";
            $image = $request->file('uploadedImage');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('uploadedImage')->storeAs($destination_path,$image_name);
        
            $input['uploadedImage'] = $image_name;

            // Check if the image name already exists in the database
            $existingImage = GalleryModel::where('image_name', $image_name)->first();

            // Check if image_name already exists.
            if($existingImage) {
                // Return in the view with flash error message.
                return back()->withInput()->withErrors([
                    'uploadedImage' => 'Το όνομα της εικόνας υπάρχει ήδη. Ανεβάστε την εικόνα με διαφορετικό όνομα.'
                ]);
            }

            $image_title = $request->input('title');
            $image_text = $request->input('text');

            $input['image_title'] = $image_title;
            $input['image_text'] = $image_text;



            // Save image name in database gallery table.
            $gallery = new GalleryModel();
            $gallery->image_name = $image_name;
            $gallery->title = $input['image_title'];
            $gallery->text = $input['image_text'];
            $gallery->save();

            // Set flash message to inform the user.
            session()->flash('flashMessage', 'Image saved succesfully');
        }

    

        // Redirect back to edit-gallery view.
        return redirect()->route('admin.edit-gallery');
    }


}
