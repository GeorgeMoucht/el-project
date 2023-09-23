<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategoryModel;

class subCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_1'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_2'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_3'
        ]);
        
        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_4'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_5'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_6'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_7'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_8'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_9'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_10'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_11'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_12'
        ]);

        SubCategoryModel::create([
            'subCategoryName' => 'sub_category_13'
        ]);
    }
}
