<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminUpdateGalleryRequest;
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


        // Save the image into the storage.
        $destination_path = "public/images/gl";
        $image = $request->file('uploadedImage');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('uploadedImage')->storeAs($destination_path,$image_name);
    
        $input['uploadedImage'] = $image_name;
        // // Check if the image name already exists in the database
        $existingImage = GalleryModel::where('image_name', $image_name)->first();

        // Check if image_name already exists.
        if($existingImage) {
            // Return in the view with flash error message.
            return back()->withInput()->withErrors([
                'uploadedImage' => 'Το όνομα της εικόνας υπάρχει ήδη. Ανεβάστε την εικόνα με διαφορετικό όνομα.'
            ]);
        }

        $image_title = $request->input('title');
        $image_text = $request->input('description');

        $input['image_title'] = $image_title;
        $input['image_text'] = $image_text;



        // Save image name in database gallery table.
        $gallery = new GalleryModel();
        $gallery->image_name = $request->file('uploadedImage')->getClientOriginalName();
        $gallery->title = $image_title;
        $gallery->text = $image_text;
        $gallery->save();

        // Set flash message to inform the user.
        session()->flash('flashMessage', 'Η εικόνα αποθηκεύτηκε επιτυχώς.');
    

    

        // Redirect back to edit-gallery view.
        return redirect()->route('admin.edit-gallery');
    }


    public function delete($id)
    {
        try {
            // Find the gallery record by ID and delete it
            GalleryModel::findOrFail($id)->delete();
            session()->flash('flashMessage', 'Η εικόνα διαγράφηκε επιτυχώς.');
        } catch (\Exception $e) {
            session()->flash('flashMessage', 'Κάτι πήγε στραβά... Παρακαλώ προσπαθήστε πάλι.');
        }
       
        return redirect()->route('admin.edit-gallery'); // Redirect back to the edit gallery page
    }
    
    public function update(AdminUpdateGalleryRequest $request, $id) {
        // var_dump($request);exit;
        // $gallery_image = GalleryModel::findOrFail($id);
        // $gallery_image->update([
            
        // ]);
        // Get the current record from the db.
        $gallery = GalleryModel::findOrFail($id);

        // Get the current title and description
        $currentTitle = $gallery->title;
        $currentDescription = $gallery->text;

        //Get the submitted form value 
        $newTitle = $request->input('editTitle');
        $newDescription = $request->input('editDescription');

        // Validate the new title and description
        $request->validate([
            'editTitle' => 'required|string',
            'editDescription' => 'required|string'
        ]);

        // Compare form values with current values
        $titleChanged = $newTitle !== $currentTitle;
        $descriptionChanged = $newDescription !== $currentDescription;

        // Update the record if changes are detected
        if($titleChanged || $descriptionChanged) {
            if($titleChanged) {
                $gallery->title = $newTitle;
            }

            if($descriptionChanged) {
                $gallery->text = $newDescription;
            }

            $gallery->save();

            //Set flash message indicating successful update
            session()->flash('flashMessage', 'Τα στοιχεία ενημερώθηκαν επιτυχώς.');
            
            // Redirect back to where the user came from
            return back();
        }

    
    }
}
