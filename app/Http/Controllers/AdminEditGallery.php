<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class AdminEditGallery extends Controller
{

    public function render()
    {
        return view('admin.edit-gallery');
    }
}
