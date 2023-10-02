@extends('layouts.app')
@section('pagespecificstyles')
    <link href="{{ asset('css/music-files.css') }}" rel="stylesheet">
    <link href="{{ asset('css/music-files-category.css') }}" rel="stylesheet">

@endsection
@section('content')

<div class="global-wrapper">    
    <div class="container">

        <div class="row" style="display: flex; justify-content: center;">
        
            <div class="col-sm-12 col-md-9 rounded-box most-downloaded-files-cnt mb-4 mt-4">
                <h3>{{ $category->categoryName }}</h3>
                <ul class="most-download-files">
                    @foreach ($subCategories as $subCategory)
                        <li>
                            <span><img src="{{ asset('img/folder-icon.png') }}" alt=""></span>
                            <span class="file-title">{{ $subCategory->subCategoryName }}</span>
                        </li>
                    @endforeach

                    @foreach ($files as $file)
                    <li class="d-flex justify-content-between align-items-center" data-file-url="{{ asset('pdf' .'/' .$category->categoryName . '/' . $file->fileName. '#toolbar=0')}}">
                        <div>
                            <!-- data-file-url="{{ asset($file->pathToFile . $category->categoryName . '/' . $file->fileName) }}" -->
                            <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                            <span class="file-title t-js">{{ $file->fileName }}</span>
                        </div>
                        <div class="btn-group mt-2">
                            <button type="button" class="btn btn-success">Αίτηση Αποθήκευσης</button>
                        </div>
                    </li>
                    @endforeach
                    <!-- <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li> -->
                </ul>
            </div>
        </div>
            
        <!-- Most downloaded section -->
        <div class="row" style="display: flex; justify-content: center;">
            <div class="col-sm-12 col-md-9 rounded-box most-downloaded-files-cnt mb-4">
                <h3>Most downloaded files</h3>
                <ul class="most-download-files">
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('img/icon-pdf.png') }}" alt=""></span>
                        <span class="file-title">Name_of_the_file</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true" style="">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileModalLabel">File Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <button class="btn" id="prev-page">Prev Page</button>
                    <button class="btn" id="next-page">Next Page</button>

                    <span class="page-info">
                        Page <span id="page-num"></span> of <span id="page-count"></span>
                    </span>

                    <canvas id="pdf-render">

                    </canvas> -->
                    <!-- <embed id="pdfViewer" src="" style="width:100%; height:500px;"> -->
                    <iframe id="pdfViewer" src="" width="100%" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection

@section('pagespecificscripts')
<!-- <script src="https://mozilla.github.io/pdf.js/build/pdf.js" > -->
<script src="{{ asset('js/music-files-category-script.js') }}"></script>
@endsection