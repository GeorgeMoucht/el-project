<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryHasSub;

class CategoryHasSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //categoryId range [1,9] , subCategoryId range [27,39] 1-13
        CategoryHasSub::create([
            'categoryId' => '1',
            'subCategoryId' => '1',
        ]);

        CategoryHasSub::create([
            'categoryId' => '1',
            'subCategoryId' => '2',
        ]);

        
        CategoryHasSub::create([
            'categoryId' => '1',
            'subCategoryId' => '3',
        ]);

        CategoryHasSub::create([
            'categoryId' => '2',
            'subCategoryId' => '4',
        ]);

        CategoryHasSub::create([
            'categoryId' => '2',
            'subCategoryId' => '5',
        ]);

        
        CategoryHasSub::create([
            'categoryId' => '3',
            'subCategoryId' => '6',
        ]);


        CategoryHasSub::create([
            'categoryId' => '3',
            'subCategoryId' => '7',
        ]);

        CategoryHasSub::create([
            'categoryId' => '3',
            'subCategoryId' => '8',
        ]);


        CategoryHasSub::create([
            'categoryId' => '3',
            'subCategoryId' => '9',
        ]);


        CategoryHasSub::create([
            'categoryId' => '4',
            'subCategoryId' => '10',
        ]);



        CategoryHasSub::create([
            'categoryId' => '5',
            'subCategoryId' => '11',
        ]);
        


        CategoryHasSub::create([
            'categoryId' => '6',
            'subCategoryId' => '12',
        ]);


        CategoryHasSub::create([
            'categoryId' => '8',
            'subCategoryId' => '13',
        ]);
    }
}
