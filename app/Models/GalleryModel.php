<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryModel extends Model
{
    use HasFactory;

    protected $fillable = ['image_name','title','text'];

    protected $table = 'gallery'; // Specify the correct table name in Database.
}
