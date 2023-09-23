<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryHasSub extends Model
{
    use HasFactory;

    protected $table = 'category_has_sub'; // Specify the correct table name in Database.

    public $timestamps = false;

    protected $fillable = [
        'categoryId',
        'subCategoryId',
    ];

    // Define the relationship with the 'categories' table
    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'categoryId');
    }

    // Define the relationship with the 'subCategories' table
    public function subCategory()
    {
        return $this->belongsTo(SubCategoryModel::class, 'subCategoryId');
    }
}
