<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Specify the correct table name in Database.

    protected $primaryKey = 'categoryId';

    public $timestamps = false;

    protected $fillable = [
        'categoryName',
    ];

    public function categoryHasSubs()
    {
        return $this->hasMany(CategoryHasSub::class, 'categoryId');
    }

}
