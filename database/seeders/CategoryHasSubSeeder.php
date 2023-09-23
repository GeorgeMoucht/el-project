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
        //categoryId range [1,9] , subCategoryId range [27,39]
        CategoryHasSub::create([
            'categoryId' => '1',
            'subCategoryId' => '27',
        ]);

        CategoryHasSub::create([
            'categoryId' => '1',
            'subCategoryId' => '28',
        ]);

        
        CategoryHasSub::create([
            'categoryId' => '1',
            'subCategoryId' => '29',
        ]);

        CategoryHasSub::create([
            'categoryId' => '2',
            'subCategoryId' => '30',
        ]);

        CategoryHasSub::create([
            'categoryId' => '2',
            'subCategoryId' => '31',
        ]);

        
        CategoryHasSub::create([
            'categoryId' => '3',
            'subCategoryId' => '32',
        ]);


        CategoryHasSub::create([
            'categoryId' => '3',
            'subCategoryId' => '33',
        ]);

        CategoryHasSub::create([
            'categoryId' => '3',
            'subCategoryId' => '34',
        ]);


        CategoryHasSub::create([
            'categoryId' => '3',
            'subCategoryId' => '35',
        ]);


        CategoryHasSub::create([
            'categoryId' => '4',
            'subCategoryId' => '36',
        ]);



        CategoryHasSub::create([
            'categoryId' => '5',
            'subCategoryId' => '37',
        ]);
        


        CategoryHasSub::create([
            'categoryId' => '6',
            'subCategoryId' => '38',
        ]);


        CategoryHasSub::create([
            'categoryId' => '8',
            'subCategoryId' => '39',
        ]);
    }
}
