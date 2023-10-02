<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\FileModel;

class MusicFilesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render()
    {     
        // $categoriesData = $this->retrieveCategories(); 
        // echo "<pre>";
        // var_dump($categoriesData);
        // echo "</pre>";
        // exit;
            $categories = CategoryModel::with('categoryHasSubs.subCategory')->get();
            $data = [];
            
            foreach ($categories as $category) {
                $categoryData = [
                    'categoryName' => $category->categoryName,
                    'subcategories' => [],
                    'files' => []
                ];
            
                foreach ($category->categoryHasSubs as $categoryHasSub) {
                    $subCategory = $categoryHasSub->subCategory;
                    $categoryData['subcategories'][] = $subCategory->subCategoryName;
                }
            
                // Query files associated with the current category
                $files = FileModel::where('categoryId', $category->categoryId)->get();
                
                foreach ($files as $file) {
                    if ($file->subCategoryId === 0) {   // Retrieve only the files that don't belong to any sub-category
                        $categoryData['files'][] = [
                            'fileName' => $file->fileName,
                            'subCategoryId' => $file->subCategoryId,    // If subCategoryId=0 means that this file will exist in the category only.
                        ];                 
                    }
                }
            
                $data[] = $categoryData;
            }
        

        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";exit;

        return view('music-files', ['data' => $data]);
    }

    public function renderCategory($category_name)
    {
        
        // Use Eloquent to retrieve content based on the $categoryName
        $category = CategoryModel::where('categoryName', $category_name)->first();

        if ($category) {
            // If the category exists, load the view with the content
            // echo "<pre>";
   
            $subCategoriesId = $category->categoryHasSubs()->pluck('subCategoryId');
            $subCategories = SubCategoryModel::whereIn('subCategoryId', $subCategoriesId)->get();
            // dd($subCategories);
            $files = FileModel::where('categoryId', $category->categoryId)
                ->where('subCategoryId', 0)
                ->get();
            return view('category-show', compact('category', 'subCategories', 'files'));
        } else {
            // Handle the case where the category doesn't exist
            abort(404);
        }

    }

    // Retrieve all category names
    public function retrieveCategories() {
        $categoriesData = CategoryModel::select('categoryId','categoryName')->get();
        return $categoriesData;
    }

    // Retrieve all sub-categories
    public function retrieveSubCategories() {
        // $subCategoriesData = SubCategoryModel::select('')
    }
}
