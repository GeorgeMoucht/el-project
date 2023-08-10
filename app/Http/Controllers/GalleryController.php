<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryModel;


class GalleryController extends Controller
{
    public function render()
    {        
        $imageData = $this->retrieveImageDataToDisplay();
        // echo "<pre>";
        // var_dump($imageData);
        // echo "</pre>";
        // exit;
        return view('gallery', ['data' => $imageData]);
    }

    public function retrieveImageDataToDisplay()
    {
        $imageData = GalleryModel::select('image_name','title','text')->get();
        return $imageData;
    }
}
