<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class AdminEditGallery extends Controller
{

    public function storeImage(Request $request)
    {
        $formData = Request::createFromGlobals()->all();
        echo "<pre>";
        // print_r($formData);
        // print_r($data['user']);
        echo session('user');
        echo "</pre>";
        exit;
    }


    public function render()
    {
        return view('admin.edit-gallery');
    }
}
