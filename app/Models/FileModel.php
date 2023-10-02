<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    use HasFactory;

    protected $table = 'files'; // Specify the correct table name in Database.

    protected $primaryKey = 'fileId';

    protected $fillable = [
        'fileName',
        'pathToFile',
        'categoryId',
        'subCategoryId',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategoryModel::class, 'subCategoryId');
    }

}
