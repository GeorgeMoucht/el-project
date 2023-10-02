<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FileModel;

class FilesSubCatIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FileModel::where('fileId', 1)->update(['subCategoryId' => '1']);

        FileModel::where('fileId', 2)->update(['subCategoryId' => '2']);

        FileModel::where('fileId', 3)->update(['subCategoryId' => '0']);

        FileModel::where('fileId', 4)->update(['subCategoryId' => '5']);

        FileModel::where('fileId', 5)->update(['subCategoryId' => '0']);

    }
}
