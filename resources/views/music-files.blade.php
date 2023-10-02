@extends('layouts.app')
@section('pagespecificstyles')
    <link href="{{ asset('css/music-files.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="global-wrapper">    
    <div class="container">
        <div class="row align-items-start pt-5 mb-4" style="display: flex; justify-content: center;">
            <!-- Tree modal -->
            <!-- <div class="col-sm-12 col-md-2 ms-3 me-3 rounded-box category-tree-cnt">
                <h5>Κατηγορίες</h5>
                <ul class="tree">   
                    <li>
                        <details>
                            <summary><span class="mini-folder"><img src="{{ asset('img/small-folder.png') }}" alt=""></span> First Item</summary>
                            <ul>
                                <li>
                                    <details>
                                        <summary><span class="mini-folder"><img src="{{ asset('img/small-folder.png') }}" alt=""></span>First Item</summary>
                                        <ul>
                                            <li class="li-hover">First</li>
                                            <li class="li-hover">Second</li>
                                            <li class="li-hover">Third</li>
                                        </ul>

                                    </details>
                                </li>
                                <li class="li-hover">Second</li>
                                <li class="li-hover">Third</li>
                            </ul>   
                        </details>
                                             
                    </li>
                     
                    <li>
                        <details>
                            <summary><span class="mini-folder"><img src="{{ asset('img/small-folder.png') }}" alt=""></span>Second</summary>
                            <ul>
                                <li>
                                    <details>
                                        <summary><span class="mini-folder"><img src="{{ asset('img/small-folder.png') }}" alt=""></span>First Item</summary>
                                        <ul>
                                            <li class="li-hover">First</li>
                                            <li class="li-hover">Second</li>
                                            <li class="li-hover">Third</li>
                                        </ul>
                                    </details>
                                    
                                </li>
                                <li class="li-hover">Second</li>
                                <li class="li-hover">Third</li>
                            </ul> 
                        </details>   
                    </li>
                </ul>
            </div> -->
            <!-- Category columns -->
            <div class="row">
                @foreach($data as $group)
                <div class="col-md-4" style="margin-top: 1rem;">
                    <div class="rounded-box folders-cnt" style="min-height: 200px;">
                        <h6><a href="{{ route('renderCategory', ['category_name' => $group['categoryName']]) }}" class="category-link">{{ $group['categoryName'] }}</a></h6>
                        <ul class="list-group list-group-flush">
                            @foreach($group['subcategories'] as $subcategory)
                            <li class="list-group-item subcategory">
                                <img src="{{ asset('img/folder-icon.png') }}" alt="">
                                <span class="folder-title" style="white-space: nowrap;">
                                    {{ $subcategory }}
                                    <span>(23)</span>
                                </span>
                            </li>
                            @endforeach
                            @if (empty($group['files']))
                                <li class="list-group-item">
                                    <span></span>
                                </li>
                            @else
                                @foreach($group['files'] as $file)
                                <li class="list-group-item">
                                    <img src="{{ asset('img/icon-pdf.png') }}" alt="">
                                    <span class="folder-title">
                                        {{ $file['fileName'] }}
                                        <span>(23)</span>
                                    </span>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- <div class="col-sm-12 col-md-2 ms-3 me-3 rounded-box folders-cnt">
                <h1>Group_1</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    
                </ul>
            </div>
            <div class="col-sm-12 col-md-2 ms-3 me-3 rounded-box folders-cnt">
                <h1>Group_2</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    
                </ul>
            </div>
            <div class="col-sm-12 col-md-2  ms-3 me-3 rounded-box folders-cnt">
                <h1>Group_3</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>      
                    <li class="list-group-item">
                        <img src="{{ asset('img/folder-icon.png') }}" alt="">
                        <span class="folder-title">
                            Folder_title 
                            <span>(23)</span> 
                        </span>
                    </li>
                    
                </ul>
            </div> -->
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
</div>

@endsection

@section('pagespecificscripts')
<script src="{{ asset('js/music-files-script.js') }}"></script>
@endsection