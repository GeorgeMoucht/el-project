<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FileModel;

class filesPdfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FileModel::create([
            'fileName' => 'test.pdf',
            'pathToFile' => 'pdf/music-archieve/',
            'categoryId' => '1',
        ]);

        FileModel::create([
            'fileName' => 'test1.pdf',
            'pathToFile' => 'pdf/music-archieve/',
            'categoryId' => '1',
        ]);

        FileModel::create([
            'fileName' => 'test2.pdf',
            'pathToFile' => 'pdf/music-archieve/',
            'categoryId' => '1',
        ]);

        FileModel::create([
            'fileName' => 'test3.pdf',
            'pathToFile' => 'pdf/music-archieve/',
            'categoryId' => '2',
        ]);

        FileModel::create([
            'fileName' => 'test4.pdf',
            'pathToFile' => 'pdf/music-archieve/',
            'categoryId' => '5'
        ]);


    }
}
