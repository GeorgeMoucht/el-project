<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    use HasFactory;

    protected $table = 'subCategories'; // Specify the correct table name in Database.

    protected $primaryKey = 'subCategoryId';

    public $timestamps = false;

    protected $fillable = [
        'subCategoryName',
    ];

    // Define the inverse relationship with 'CategoryHasSub' model
    public function categoryHasSubs()
    {
        return $this->hasMany(CategoryHasSub::class, 'subCategoryId');
    }
}
